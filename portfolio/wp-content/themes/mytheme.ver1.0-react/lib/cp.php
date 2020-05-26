<?php
// カスタム投稿追加
function news_post() {
  $labels = array(
    'menu_name'          => 'NEWS',
    'all_items'          => 'NEWS一覧',
    'name'               => 'NEWS',
    'singular_name'      => 'NEWS',
    'add_new'            => '新規追加',
    'add_new_item'       => '新規NEWS追加',
    'edit_item'          => 'NEWS編集',
    'new_item'           => '新規NEWS',
    'view_item'          => 'NEWSを表示',
    'search_items'       => 'NEWS検索',
    'not_found'          => 'NEWSが見つかりません',
    'not_found_in_trash' => 'ゴミ箱にNEWSはありません',
    'parent_item_colon'  => ''
  );
  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'hierarchical'       => true,
    'menu_position'      => 5,
    'supports'           => array('title', 'thumbnail', 'editor'),
    'has_archive'        => true
  );
  register_post_type('news', $args);
  }
  add_action('init', 'news_post');
  ?>