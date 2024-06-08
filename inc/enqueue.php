<?php
// Theme CSS & Js  file calling
function navaz_css_js_file_call() {
    // CSS
    wp_enqueue_style( 'navaz-style', get_stylesheet_uri() );
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), 'v5.3.3', 'all' );
    wp_register_style( 'theme_custom', get_template_directory_uri() . '/css/theme_custom.css', array(), '1.0.0', 'all' );
    wp_register_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0.1', 'all' );

    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'theme_custom' );
    wp_enqueue_style( 'responsive' );


    // JS
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), 'v5.3.3', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );


}
add_action( 'wp_enqueue_scripts', 'navaz _css_js_file_call' );