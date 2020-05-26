<?php
function my_theme_widgets_init() {
  register_sidebar( array(
    'name' => 'instagram sidebar',
    'id' => 'instagram-sidebar',
  ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );
?>