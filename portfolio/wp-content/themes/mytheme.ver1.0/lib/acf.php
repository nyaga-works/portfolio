<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
  'key' => 'group_5e96b9325203a',
  'title' => 'DISCOGRAPHY',
  'fields' => array(
    array(
      'key' => 'field_5e96b935d02aa',
      'label' => 'リリース日時',
      'name' => 'release_date',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'XXXX.XX.XX　Release',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array(
      'key' => 'field_5e96baa54f957',
      'label' => 'spotify',
      'name' => 'spotify_url',
      'type' => 'text',
      'instructions' => '※spotifyを利用している場合はURLを記載してください。',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array(
      'key' => 'field_5e96bad54f958',
      'label' => 'APPLE MUSIC',
      'name' => 'apple_url',
      'type' => 'text',
      'instructions' => '※APPLE MUSICを利用している場合はURLを記載してください。',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
  ),
  'location' => array(
    array(
      array(
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'discography',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => true,
  'description' => '',
));

acf_add_local_field_group(array(
  'key' => 'group_5e96ad2c00477',
  'title' => 'MOVIE',
  'fields' => array(
    array(
      'key' => 'field_5e96ad2f715f6',
      'label' => '数字11桁のyoutube ID',
      'name' => 'yt_id',
      'type' => 'text',
      'instructions' => '※(例)https://www.youtube.com/watch?v=【数字11桁のyoutube ID】',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
  ),
  'location' => array(
    array(
      array(
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'movie',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => true,
  'description' => '',
));

acf_add_local_field_group(array(
  'key' => 'group_5e9695b868af4',
  'title' => 'TOP',
  'fields' => array(
    array(
      'key' => 'field_5e9695b86ee68',
      'label' => 'TOPに表示する場合チェックを入れてください',
      'name' => 'index_show',
      'type' => 'true_false',
      'instructions' => '※最低最大4件まで表示（MOVIE：最低最大2件まで表示）',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
      'ui' => 0,
      'ui_on_text' => '',
      'ui_off_text' => '',
    ),
  ),
  'location' => array(
    array(
      array(
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'discography',
      ),
    ),
    array(
      array(
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'movie',
      ),
    ),
    array(
      array(
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'goods',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'acf_after_title',
  'style' => 'seamless',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => true,
  'description' => '',
));

acf_add_local_field_group(array(
  'key' => 'group_5e9ab1f655ee2',
  'title' => 'LIVE',
  'fields' => array(
    array(
      'key' => 'field_5e9ab20d65986',
      'label' => 'ライブ日程',
      'name' => 'live_date',
      'type' => 'date_picker',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'display_format' => 'Y/m/d',
      'return_format' => 'Y-m-d',
      'first_day' => 1,
    ),
  ),
  'location' => array(
    array(
      array(
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'live',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'acf_after_title',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => true,
  'description' => '',
));

endif;
?>