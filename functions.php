<?php

if ( ! function_exists( 'clean_blog_theme_setup' ) ) :

function clean_blog_theme_setup() {
 
    // for multi language support/textdomain
    load_theme_textdomain( 'clean-blog', get_template_directory() . '/languages' );

    // for creating automatic feed links
    add_theme_support( 'automatic-feed-links' );

    // for support featured image
    add_theme_support( 'post-thumbnails' );

    // for posts format
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

    // for register menus
    register_nav_menus( array(
        'primary_menu'   => __( 'Primary Menu', 'clean-blog' ),
    ) );
    // for bootstrap navwalker
    require_once get_template_directory().'/inc/walker.php';

    // for theme assests files
    function add_theme_scripts(){
        // for css
        wp_enqueue_style('bootstrap', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css', array(), '4.0', 'all');
        wp_enqueue_style('clean-blog', get_template_directory_uri().'/css/clean-blog.min.css', array(), '1.0', 'all');
        wp_enqueue_style('font-awesome', get_template_directory_uri().'/vendor/fontawesome-free/css/all.min.css', array(), 'all');
        wp_enqueue_style('style', get_stylesheet_uri());
        // for js
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap-bundle', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '3.1', true);
        wp_enqueue_script('clean-blog', get_template_directory_uri().'/js/clean-blog.min.js', array(), '1.0', true);
    } add_action('wp_enqueue_scripts', 'add_theme_scripts');

    // for register sidebar/widget
    function my_register_sidebar(){
        register_sidebar(array(
            'id'            => 'primary_sidebar', 
            'name'          => 'Primary Sidebar', 
            'description'   => 'This is primary Sidebar Description'
        ));
    } add_action('widgets_init', 'my_register_sidebar');

    // for redux framework
    require_once get_template_directory().'/inc/redux/redux-framework.php';
    require_once get_template_directory().'/inc/redux/sample/config.php';
   
}
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'clean_blog_theme_setup' );