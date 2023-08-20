<?php

// サムネイル画像有効化
add_theme_support('post-thumbnails');

// 管理画面へのバーを無効化する
show_admin_bar(false);

// 投稿のアーカイブページ
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
function post_has_archive($args, $post_type) {
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'notes';
  }
  return $args;
}

// 固定ページのエディタを非表示
function post_output_css() {
  $pt = get_post_type();
  if ($pt == 'page') { 
      $hide_postdiv_css = '<style type="text/css">#postdiv, #postdivrich { display: none; }</style>';
      echo $hide_postdiv_css;
  }
}
add_action('admin_head', 'post_output_css');

// カテゴリーによってタグの色を出し分ける
function get_category_color($category_name) {
  switch($category_name) {
    case "Web":
      return "web";
    case "Hobby":
      return "hobby";
    case "Other":
      return "other";
    default:
      return "all";
  };
}

add_action('init', 'create_post_type');

function create_post_type() {

  register_post_type(
    'portforio',
    array(
      'label' => 'ポートフォリオ',
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'menu_position' => 5,
      'supports' => [],
      'show_in_rest' => true
    )
  );
}

function addFiles() {
  // CSS
  wp_enqueue_style("stylesheet", get_template_directory_uri() . "/css/style.min.css");

  // JS
  wp_enqueue_script("404Model", get_template_directory_uri() . "/scripts/notFoundModel.js");
  wp_enqueue_script("articleSlider", get_template_directory_uri() . "/scripts/articleSlider.js");
  wp_enqueue_script("categorySelector", get_template_directory_uri() . "/scripts/categorySelector.js");
  wp_enqueue_script("hamburgerMenu", get_template_directory_uri() . "/scripts/hamburgerMenu.js");
  wp_enqueue_script("rocketLaunch", get_template_directory_uri() . "/scripts/rocketLaunch.js");
  wp_enqueue_script("rocketModel", get_template_directory_uri() . "/scripts/rocketModel.js");
}

add_action("wp_enqueue_scripts", "addFiles");