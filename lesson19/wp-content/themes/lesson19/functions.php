<?php

/*style and script include*/
function include_style_script() {
    wp_enqueue_style('style_vendor', get_template_directory_uri() . '/css/vendor.css');
    wp_enqueue_style('style_main', get_stylesheet_uri(), ['style_vendor']);
    wp_enqueue_script('vendor_js', get_template_directory_uri() . '/js/vendor.js', 'in_footer');
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', ['vendor_js'], 'in_footer');
}
add_action('wp_enqueue_scripts', 'include_style_script');

/*setup them*/
function homework_setup() {
    load_theme_textdomain('wp-homework', get_template_directory() . '/languages');
    register_nav_menu('menu', 'Main menu');
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height' => 34,
        'width' => 164,
        'flex-height' => true
    ));
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-background', apply_filters( 'underscores_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));
    add_theme_support('post_formats', array(
        'aside',
        'image',
        'video',
        'gallery'
    ));
}
add_action('after_setup_theme', 'homework_setup');

require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/custom_post_type.php';

function remove_more_link() { return ''; }
add_filter('the_content_more_link', 'remove_more_link');
