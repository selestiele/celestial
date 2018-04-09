<?php

function celestial_styles() {
    //link the stylesheet
    wp_register_style('style', get_stylesheet_directory_uri() . '/style.css', array(), '0.1');
    wp_register_style('americana', get_template_directory_uri() . '/fonts/americana/americanastyles.css');
    wp_register_style('proxima-nova', 'https://use.typekit.net/ksj0iwl.css');
    wp_register_style('fontAwesome', get_template_directory_uri() . '/fonts/fontawesome/css/fontawesome-all.min.css');
    
    wp_register_script('navigation', get_template_directory_uri() . '/js/navigation.js');
    //enqueue the stylesheets
    wp_enqueue_style('style');
    wp_enqueue_style('americana');
    wp_enqueue_style('proxima-nova');
    wp_enqueue_style('fontAwesome');
    wp_enqueue_script('navigation');
    
}
add_action('wp_enqueue_scripts', 'celestial_styles');

register_nav_menus( array(
     'main' => __( 'Main Menu', 'main'),
     'social' => __( 'Social Menu', 'social'),
     'footer' => __( 'Footer Menu', 'footer')
));
