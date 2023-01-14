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

// カテゴリーによってタグの色を出し分ける
function get_category_color($category_name) {
  switch($category_name) {
    case "Web開発":
      return "dev";
    case "デザイン":
      return "design";
    case "その他":
      return "other";
    default:
      return "all";
  };
}