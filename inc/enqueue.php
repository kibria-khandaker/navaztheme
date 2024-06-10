<?php
// Theme CSS & Js  file calling
function navaz_css_js_file_call() {
    // CSS
    wp_enqueue_style( 'navaz-style', get_stylesheet_uri() );
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), 'v5.3.3', 'all' );
    wp_register_style( 'bxslider', get_template_directory_uri() . '/css/bxslider.min.css', array(), '4.2.17', 'all' );
    wp_register_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '2.3.4', 'all' );
    wp_register_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '2.3.4', 'all' );
    wp_register_style( 'slicknav', get_template_directory_uri() . '/css/slicknav.css', array(), 'v1.0.1', 'all' );
    wp_register_style( 'theme_custom', get_template_directory_uri() . '/css/theme_custom.css', array(), '1.0.0', 'all' );
    wp_register_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'bootstrap' );    
    wp_enqueue_style( 'bxslider' );
    wp_enqueue_style( 'owl.carousel.min' );
    wp_enqueue_style( 'owl.theme.default.min' );
    wp_enqueue_style( 'slicknav' );
    wp_enqueue_style( 'theme_custom' );
    wp_enqueue_style( 'responsive' );

    // JS
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), 'v5.3.3', true );
    wp_enqueue_script( 'bxslider', get_template_directory_uri() . '/js/bxslider.min.js', array(), 'v4.2.17', true );
    wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '2.3.4', true );
    wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/js/slicknav.js', array(), 'v1.0.1', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'navaz_css_js_file_call' );

// Google call
function navaz_google_fonts() {
    wp_enqueue_style( 'navaz_google_fonts', 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'navaz_google_fonts' );

// Dashicons Not Showing fixing -- if not load icon the use it
// function dashicons_load_issue(){
//     wp_enqueue_style('dashicons');
// }
// add_action( 'wp_enqueue_scripts','dashicons_load_issue' );