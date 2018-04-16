<?php

function celestial_styles() {
    //link the stylesheet
    // Bootstrap CDN
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css');
    
     //link the theme stylesheet
    wp_register_style('style', get_stylesheet_directory_uri() . '/style.css', array(), '0.1');
    
    // load the fonts
    wp_register_style('americana', get_template_directory_uri() . '/fonts/americana/americanastyles.css');
    wp_register_style('proxima-nova', 'https://use.typekit.net/ksj0iwl.css');
    wp_register_style('fontAwesome', get_template_directory_uri() . '/fonts/fontawesome/css/fontawesome-all.min.css');
    
    //javascript file and jQuery
    wp_register_script('navigation', get_template_directory_uri() . '/js/navigation.js');
    
    
    //Bootstrap CDN javascript
    wp_register_script('bootstrapjQuery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
    wp_register_script('boostrapPopper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js');
    wp_register_script('bootstrapStackpath', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js');
    
    //enqueue the stylesheets
    wp_enqueue_style('style');
    wp_enqueue_style('americana');
    wp_enqueue_style('proxima-nova');
    wp_enqueue_style('fontAwesome');
    wp_enqueue_script('navigation');
    wp_enqueue_script('bootstrapjQuery');
    wp_enqueue_script('bootstrapPopper');
    wp_enqueue_script('bootstrapStackpath');
    
}
add_action('wp_enqueue_scripts', 'celestial_styles');

register_nav_menus( array(
     'main' => __( 'Main Menu', 'main'),
     'social' => __( 'Social Menu', 'social'),
     'footer' => __( 'Footer Menu', 'footer')
));



//add theme support for custom logo and html5
add_theme_support( 'custom-logo', array(
    'height'      => 200,
    'flex-height' => true,
    'flex-width'  => true,
) );

add_theme_support( 'html5', array( 
     'comment-list', 
     'comment-form', 
     'search-form', 
     'gallery', 
     'caption' 
) );

add_theme_support( 'post-thumbnails' ); //featured images

//add images sizes for gallery
add_action( 'after_setup_theme', 'celestial_theme_setup' );
function celestial_theme_setup() {
    add_image_size( 'gallery-thumb', 109, 160, false ); // 109 wide by 160 height
    add_image_size( 'gallery-large', 220, 325, false ); // double thumbnail size, plus some pixels to make up for gaps in the grid
    add_image_size( 'featured', 900 , 400, true ); // large featured image, with cropping
}

//remove inline default gallery styles
add_filter( 'use_default_gallery_style', '__return_false' );

//remove ellipses from excerpts
add_filter('excerpt_more','__return_false');
