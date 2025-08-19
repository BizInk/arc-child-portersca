<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'blog_intro',
  'title' => 'Blog intro',
  'fields' => array (
    array (
      'key' => 'blog_intro_content',
      'label' => 'Content',
      'name' => 'blog_intro_content',
      'type' => 'wysiwyg',
      'value' => NULL,
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'tabs' => 'all',
      'toolbar' => 'full',
      'media_upload' => 1,
      'delay' => 0,
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_type',
        'operator' => '==',
        'value' => 'posts_page',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

endif;
