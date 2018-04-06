<?php

function celestial_styles() {
    //link the stylesheet
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '0.1');
    wp_register_style('americana', get_template_directory_uri() . '/fonts/americana/americanastyles.css');
    wp_register_style('proxima-nova', 'https://use.typekit.net/ksj0iwl.css');
    wp_register_style('fontAwesome', get_template_directory_uri() . '/fonts/fontAwesome/css/fontawesome-all.css');
    
    //enqueue the stylesheets
    wp_enqueue_style('style');
    wp_enqueue_style('google-fonts');
    wp_enqueue_style('fa-fonts');
}
add_action('wp_enqueue_scripts', 'celestial_styles');

register_nav_menus( array(
     'main' => __( 'Main Menu', 'main'),
     'social' => __( 'Social Menu', 'social'),
     'footer' => __( 'Footer Menu', 'footer')
));
