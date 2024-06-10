<?php

// Theme Function
function navaz_customize_register( $wp_customize ) {

    // Header Area Customize Function
    $wp_customize->add_section( 'navaz_header_area', array(
        'title'       => __( 'Header Area', 'navaztheme' ),
        'description' => __( 'Here is the description about Header Area', 'navaztheme' ),
    ) );
    $wp_customize->add_setting( 'navaz_header_logo', array(
        // 'default' => get_bloginfo( 'template_directory' ) . '/img/header_logo.png',
        'default' => get_template_directory_uri() . '/img/header_logo.png',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'navaz_header_logo', array(
        'label'       => 'Header Logo Upload',
        'description' => __( 'Here is the description about logo', 'navaztheme' ),
        'setting'     => 'navaz_header_logo',
        'section'     => 'navaz_header_area',
    ) ) );

    // Menu Position Function
    $wp_customize->add_section( 'navaz_menu_position_section', array(
        'title'       => __( 'Menu Position', 'navaztheme' ),
        'description' => __( 'Here is the description about Menu Position Area', 'navaztheme' ),
    ) );
    $wp_customize->add_setting( 'navaz_header_menu_position_setting', array(
        'default' => 'right_menu',
    ) );
    $wp_customize->add_control( 'navaz_header_menu_position_setting', array(
        'label'       => 'Header Menu Position',
        'description' => __( 'Here is the description about Header Menu Position', 'navaztheme' ),
        'setting'     => 'navaz_header_menu_position_setting',
        'section'     => 'navaz_menu_position_section',
        'type'        => 'radio',
        'choices'     => array(
            'left_menu'   => 'Left Menu',
            'center_menu' => 'Center Menu',
            'right_menu'  => 'Right Menu',
        ),
    ) );

    // Footer Option
    $wp_customize->add_section( 'navaz_footer_section', array(
        'title'       => __( 'Footer Option', 'navaztheme' ),
        'description' => __( 'Here is the description about Footer Area', 'navaztheme' ),
    ) );
    $wp_customize->add_setting( 'navaz_copyright_setting', array(
        'default' => '&copy; Copyright 2024 | navaz theme',
    ) );
    $wp_customize->add_control( 'navaz_copyright_setting', array(
        'label'       => 'Copyright Text',
        'description' => __( 'Here is the description about Copyright', 'navaztheme' ),
        'setting'     => 'navaz_copyright_setting',
        'section'     => 'navaz_footer_section',
    ) );

    // Theme Color Change from customization
    $wp_customize->add_section( 'navaz_theme_color_section', array(
        'title'       => __( 'Theme Color Change Option', 'navaztheme' ),
        'description' => __( 'Here is the description about Theme Color Change', 'navaztheme' ),
    ) );

    $wp_customize->add_setting( 'navaz_theme_bg_color_setting', array(
        'default' => '#ffffff',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navaz_theme_bg_color_setting', array(
        'label'       => 'Theme Background Color Change',
        'description' => __( 'Here is the description about Theme Bg Color Change', 'navaztheme' ),
        'section'     => 'navaz_theme_color_section',
        'setting'     => 'navaz_theme_bg_color_setting',
    ) ) );

    $wp_customize->add_setting( 'navaz_theme_link_color_setting', array(
        'default' => '#ea1a70',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navaz_theme_link_color_setting', array(
        'label'       => 'Primary Link Color Change',
        'description' => __( 'Here is the description about Theme Link Color Change', 'navaztheme' ),
        'section'     => 'navaz_theme_color_section',
        'setting'     => 'navaz_theme_link_color_setting',
    ) ) );

    /*
    // WP Default Login Page logo Change
    $wp_customize->add_section( 'navaz_wp_login_section', array(
        'title'       => __( 'WP Login Logo Change', 'navaztheme' ),
        'description' => __( 'Here is the description about Theme WP Login Logo Change', 'navaztheme' ),
    ) );
    $wp_customize->add_setting( 'navaz_wp_login_logo_setting', array(
        'default' => get_template_directory_uri() . '/img/wp-login-logo.png',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'navaz_wp_login_logo_setting', array(
        'label'       => 'WP Login Logo Upload',
        'description' => __( 'Here is the description about WP Login logo', 'navaztheme' ),
        'setting'     => 'navaz_wp_login_logo_setting',
        'section'     => 'navaz_wp_login_section',
    ) ) );


    // WP Default Login Page BG img Change -----

    // $wp_customize->add_section( 'navaz_wp_login_bg_section', array(
    //     'title'       => __( 'WP Login Page BG Change', 'navaztheme' ),
    //     'description' => __( 'Here is the description about Theme WP Login Page BG Change', 'navaztheme' ),
    // ) );
    $wp_customize->add_setting( 'navaz_wp_login_bg_logo_setting', array(
        'default' => get_template_directory_uri() . '/img/wp_login_bd.jpg',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'navaz_wp_login_bg_logo_setting', array(
        'label'       => 'WP Login Logo Upload',
        'description' => __( 'Here is the description about WP Login Page BG', 'navaztheme' ),
        'setting'     => 'navaz_wp_login_bg_logo_setting',
        'section'     => 'navaz_wp_login_section',
    ) ) );

    
    // WP Default Login Page color Change -----
    $wp_customize->add_setting( 'navaz_wp_login_logo_setting', array(
        'default' => get_template_directory_uri() . '/img/wp_login_bd.jpg',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'navaz_wp_login_logo_setting', array(
        'label'       => 'WP Login logo Upload',
        'description' => __( 'Here is the description about WP Login Page logo', 'navaztheme' ),
        'setting'     => 'navaz_wp_login_logo_setting',
        'section'     => 'navaz_wp_login_section',
    ) ) );


    $wp_customize->add_setting( 'navaz_wp_login_field_color_setting', array(
        'default' => '#ea1a70',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navaz_wp_login_field_color_setting', array(
        'label'       => 'WP Login color Upload',
        'description' => __( 'Here is the description about WP Login Page color', 'navaztheme' ),
        'setting'     => 'navaz_wp_login_field_color_setting',
        'section'     => 'navaz_wp_login_section',
    ) ) );
*/
    

}
add_action( 'customize_register', 'navaz_customize_register' );



// Theme Color Change from customization || 
function navaz_theme_color_cus() {
    ?>
        <style>
            body{background: <?php print get_theme_mod( 'navaz_theme_bg_color_setting' );?>}
            :root{--pink: <?php print get_theme_mod( 'navaz_theme_link_color_setting' );?>}

            /* body{background: <?php // echo esc_attr( $navaz_theme_bg_color_setting ); ?>}
            :root{--pink: <?php // echo esc_attr( $navaz_theme_link_color_setting ); ?>} */
        </style>
     <?php
}
add_action( 'wp_head', 'navaz_theme_color_cus' );

function navaz_theme_wp_login() {
    ?>
       <style>
            #login h1 a, .login h1 a{
            background-image: url(<?php print get_theme_mod( 'navaz_wp_login_logo_setting' );?>) !important;
            }
            /* Login page bg change css  */
            body.login {
                background: url(<?php print get_theme_mod( 'navaz_wp_login_bg_logo_setting' );?>) !important;
                /* background: url(../img/wp_login_bd.jpg); */
            }
            /* color change  */
            #login form p.submit input {
                background: <?php print get_theme_mod( 'navaz_wp_login_field_color_setting' );?> !important;
            }
            .login #login_error,
            .login .message,
            .login .success {
                border-left: 4px solid <?php print get_theme_mod( 'navaz_wp_login_field_color_setting' );?> !important;
            }
            input#user_login,
            input#user_pass {
                border-left: 4px solid <?php print get_theme_mod( 'navaz_wp_login_field_color_setting' );?> !important;
            }


       </style>
    <?php
}
add_action( 'login_enqueue_scripts', 'navaz_theme_wp_login' );

