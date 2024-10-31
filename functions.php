<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style','hello-elementor-header-footer' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

add_action( 'acf/include_fields', function() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    acf_add_local_field_group( array(
    'key' => 'group_67233c3d136ae',
    'title' => 'Deer Test Fields',
    'fields' => array(
        array(
            'key' => 'field_67233c3dfa6f0',
            'label' => 'Start date',
            'name' => 'dd_test_start_date',
            'aria-label' => '',
            'type' => 'date_picker',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'display_format' => 'F j, Y',
            'return_format' => 'F j, Y',
            'first_day' => 0,
            'allow_in_bindings' => 0,
        ),
        array(
            'key' => 'field_67233c71fa6f1',
            'label' => 'End date',
            'name' => 'dd_test_end_date',
            'aria-label' => '',
            'type' => 'date_picker',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'display_format' => 'F j, Y',
            'return_format' => 'F j, Y',
            'first_day' => 0,
            'allow_in_bindings' => 0,
        ),
        array(
            'key' => 'field_67233c81fa6f2',
            'label' => 'Description',
            'name' => 'dd_test_description',
            'aria-label' => '',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'allow_in_bindings' => 0,
            'rows' => '',
            'placeholder' => '',
            'new_lines' => '',
        ),
        array(
            'key' => 'field_67233c8cfa6f3',
            'label' => 'Cover image',
            'name' => 'dd_test_cover_image',
            'aria-label' => '',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'url',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
            'allow_in_bindings' => 0,
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_67233ca4fa6f4',
            'label' => 'Application link',
            'name' => 'dd_test_application_link',
            'aria-label' => '',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'allow_in_bindings' => 0,
            'placeholder' => '',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'deer-test',
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
    'show_in_rest' => 0,
) );
} );

add_action( 'init', function() {
    register_post_type( 'deer-test', array(
    'labels' => array(
        'name' => 'Deer Tests',
        'singular_name' => 'Deer Test',
        'menu_name' => 'Deer Test',
        'all_items' => 'All Deer Test',
        'edit_item' => 'Edit Deer Test',
        'view_item' => 'View Deer Test',
        'view_items' => 'View Deer Test',
        'add_new_item' => 'Add New Deer Test',
        'add_new' => 'Add New Deer Test',
        'new_item' => 'New Deer Test',
        'parent_item_colon' => 'Parent Deer Test:',
        'search_items' => 'Search Deer Test',
        'not_found' => 'No deer test found',
        'not_found_in_trash' => 'No deer test found in Trash',
        'archives' => 'Deer Test Archives',
        'attributes' => 'Deer Test Attributes',
        'insert_into_item' => 'Insert into deer test',
        'uploaded_to_this_item' => 'Uploaded to this deer test',
        'filter_items_list' => 'Filter deer test list',
        'filter_by_date' => 'Filter deer test by date',
        'items_list_navigation' => 'Deer Test list navigation',
        'items_list' => 'Deer Test list',
        'item_published' => 'Deer Test published.',
        'item_published_privately' => 'Deer Test published privately.',
        'item_reverted_to_draft' => 'Deer Test reverted to draft.',
        'item_scheduled' => 'Deer Test scheduled.',
        'item_updated' => 'Deer Test updated.',
        'item_link' => 'Deer Test Link',
        'item_link_description' => 'A link to a deer test.',
    ),
    'public' => true,
    'show_in_rest' => true,
    'menu_icon' => 'dashicons-clock',
    'supports' => array(
        0 => 'title',
        1 => 'editor',
        2 => 'thumbnail',
        3 => 'custom-fields',
    ),
    'delete_with_user' => false,
) );
} );