<?php
get_template_part('lib/acf');
get_template_part('lib/cp');
get_template_part('lib/widget');

/* ----------------------------------------------------------------------------
theme support 
---------------------------------------------------------------------------- */
function setup() {
  // 各種機能サポート
  add_theme_support('nav-menus');
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('html5', array(
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
  add_theme_support('post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'audio',
  ));
  add_theme_support('custom-logo', array(
    'width'       => 250,
    'height'      => 250,
    'flex-width'  => true,
  ));
  add_theme_support('customize-selective-refresh-widgets');

  // wp_head関数の出力データ削除
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'index_rel_link');
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_action('wp_head','rest_output_link_wp_head');

  // ギャラリー用CSS停止
  //add_filter('use_default_gallery_style', '__return_false');
}
add_action('after_setup_theme', 'setup');

/* ----------------------------------------------------------------------------
admin menu 
---------------------------------------------------------------------------- */
/* メニューバーの特定項目を非表示 */
function remove_menus () {
	global $menu;
//	unset($menu[2]);			// ダッシュボード
	unset($menu[4]);			// メニューの線1
	unset($menu[5]);			// 投稿
	unset($menu[10]);			// Movie
	unset($menu[15]);			// リンク
//	unset($menu[20]);			// ページ
	unset($menu[25]);			// コメント
	unset($menu[59]);			// メニューの線2
//	unset($menu[60]);			// テーマ
//	unset($menu[65]);			// プラグイン
//	unset($menu[70]);			// プロフィール
//	unset($menu[75]);			// ツール
//	unset($menu[80]);			// 設定
	unset($menu[90]);			// メニューの線3
}
add_action('admin_menu', 'remove_menus');
