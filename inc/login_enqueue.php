<?php

// WP Default Login Page css file replace with my css file
function navaz_login_enqueue_register() {

    wp_enqueue_style( 'login_enqueue', get_stylesheet_directory_uri() . "/css/login_enqueue.css", array(), '1.0.1', 'all' );

}
add_action( 'login_enqueue_scripts', 'navaz_login_enqueue_register' );

// WP Default Login Page Logo change
function navaz_login_wp_logo_change() {
    ?>
    <style>
    #login h1 a, .login h1 a{
        background-image: url(<?php print get_stylesheet_directory_uri(); ?>../img/header_logo.png);
    }
    </style>
    <?php
}
add_action(  'login_enqueue_scripts','navaz_login_wp_logo_change', );



// WP Default Login Page Logo URL change
function navaz_login_wp_logo_url_change() {
    return home_url();
}
add_action(  'login_headerurl','navaz_login_wp_logo_url_change', );