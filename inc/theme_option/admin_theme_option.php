<?php

/**
 * Enqueue CSS
 */
function theme_option_custom_css() {
    wp_enqueue_style( 'theme_option_custom', get_template_directory_uri() . '/css/theme_option_custom.css', array(), '1.0.0', 'all' );
}
add_action( 'admin_enqueue_scripts', 'theme_option_custom_css' );

function navaz_add_theme_option_to_page() {
    // add_menu_page(
    //   'Theme Option for Admin', // $page_title:string,
    //   'Theme Option', // $menu_title:string,
    //   'manage_options', // $capability:string,
    //   'navaz_theme_option', // $menu_slug:string,
    //   'navaz_theme_option_general', // $callback:callable,
    //   'dashicons-visibility', // $icon_url:string,  get_template_directory_uri(). '/img/mini-logo.png'
    //   101,// $position:integer|float|null
    // );
    add_menu_page( 'Theme Option for Admin', 'Theme Option', 'manage_options', 'navaz_theme_option', 'navaz_theme_option_general', get_template_directory_uri() . '/img/theme_options_logo.png', 101 );

    add_submenu_page( 'navaz_theme_option', 'Theme Option', 'General', 'manage_options', 'navaz_theme_option', 'navaz_theme_option_general', );

    add_submenu_page( 'navaz_theme_option', 'Theme Custom CSS', 'Custom CSS', 'manage_options', 'navaz_custom_css', 'navaz_theme_custom_css_page', );

    add_submenu_page( 'navaz_theme_option', 'Theme Custom JavaScript', 'Custom JS', 'manage_options', 'navaz_custom_js', 'navaz_theme_custom_js_page', );

}
add_action( 'admin_menu', 'navaz_add_theme_option_to_page' );

function navaz_theme_option_general() {
    // Generating Theme option
    require_once get_template_directory() . '/inc/theme_option/general.php';
}

function navaz_theme_custom_css_page() {
    // Generating Theme option
    require_once get_template_directory() . '/inc/theme_option/custom_css.php';
}

function navaz_theme_custom_js_page() {
    // Generating Theme option
    require_once get_template_directory() . '/inc/theme_option/custom_js.php';
}