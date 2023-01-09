<?php

// サムネイル画像有効化
add_theme_support('post-thumbnails');

// 管理画面へのバーを無効化する
show_admin_bar(false);

// メニュー非表示
add_action('admin_menu', 'remove_menus');
function remove_menus()
{
  remove_menu_page('edit.php'); // 投稿を非表示
}

// カスタム投稿タイプ
add_action('init', 'create_post_type');
function create_post_type() {
  register_post_type(
    'web',
    array(
      'label' => 'Web制作',
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'menu_position' => 5,
      'supports' => ['title', 'editor', 'thumbnail'],
      'show_in_rest' => true
    )
  );
  register_taxonomy(
    'tech-category',
    'web',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => '技術 カテゴリー',
      'singular_label' => 'Web制作 カテゴリー',
      'public' => true,
      'show_ui' => true,
      'show_in_rest' => true,
    )
  );
  register_taxonomy(
    'keyword',
    'web',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'キーワード',
      'singular_label' => 'キーワード',
      'public' => true,
      'show_ui' => true,
      'show_in_rest' => true,
    )
  );
}