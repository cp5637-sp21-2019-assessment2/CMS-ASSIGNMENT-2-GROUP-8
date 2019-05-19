<?php



function assignment_theme_setup(){

add_theme_support('custom-logo');

add_theme_support('title-tag');

add_theme_support('post-thumbnails');

add_image_size('');

add_theme_support('automatic-feed-links');

register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'assignment' ),
   ) );
};
add_action('after_setup_theme','assignment_theme_setup');


function assignment_theme_scripts(){
    
    wp_enqueue_style('style', get_stylesheet_uri() );

    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');

    wp_enqueue_script('jquery');

    wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js');

}  
add_action('wp_enqueue_scripts','assignment_theme_scripts');

function assignment_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'description'   => 'Main Sidebar on Right side',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'theme_name' ),
        'id'            => 'footer-1',
        'description'   => 'Main Sidebar on Right side',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'theme_name' ),
        'id'            => 'footer-2',
        'description'   => 'Main Sidebar on Right side',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget 3', 'theme_name' ),
        'id'            => 'footer-3',
        'description'   => 'Main Sidebar on Right side',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    }
add_action ('widgets_init', 'assignment_widgets_init');


