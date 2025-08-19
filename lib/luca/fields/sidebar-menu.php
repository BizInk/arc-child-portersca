<?php if (function_exists('acf_add_local_field_group')):

    acf_add_local_field_group(array(
        'key' => 'sidebar_menu',
        'title' => 'Sidebar menu',
        'fields' => array(
            array(
                'key' => 'sidebar_menu_title',
                'label' => 'Title',
                'name' => 'sidebar_menu_title',
                'type' => 'text',
                'value' => NULL,
                'instructions' => '',
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
                'key' => 'sidebar_menu_menu',
                'label' => 'Menu',
                'name' => 'sidebar_menu_menu',
                'type' => 'nav_menu',
                'value' => NULL,
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'save_format' => 'menu',
                'container' => 0,
                'allow_null' => 1,
            ),
        ),
        'location' => array(
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
                array (
                    'param' => 'page_type',
                    'operator' => '!=',
                    'value' => 'posts_page',
                ),
                array (
                    'param' => 'page_template',
                    'operator' => '!=',
                    'value' => 'template-front.php',
                ),
                array (
                    'param' => 'page_template',
                    'operator' => '!=',
                    'value' => 'template-full-width.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'side',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));

endif;