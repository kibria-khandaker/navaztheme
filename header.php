<?php
/**
 * This Template displaying for header
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes();?>" class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head();?>
</head>
<body <?php body_class();?> >


<div class="top_header_area">
    <div class="container">
        <div class="row"> 
            <div class="col-md-4">
                <p><i class="fa-sharp fa-solid fa-location-dot"></i> <?php print get_option("address-info"); ?></p>
            </div>
            <div class="col-md-4 text-center">
                <p><i class="fa-solid fa-envelope"></i> <?php print get_option("email-info"); ?></p>
            </div>
            <div class="col-md-4 text-end">
                <p><i class="fa-solid fa-phone"></i> <?php print get_option("phone-number"); ?></p>
            </div>
        </div>
    </div>
</div>

<header id="header_area" class="<?php print get_theme_mod( 'navaz_header_menu_position_setting' ); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo_img">
                    <!-- <a href="#"> <img src="<?php // echo get_template_directory_uri(); ?>/img/logo.png" alt="logo" > </a> -->
                <!-- <a href="<?php // echo home_url(); ?>"> <img src="<?php // echo esc_attr( $navaz_header_logo ); ?>" alt="logo" > </a> -->
                <a href="<?php print home_url(); ?>"><img src="<?php print get_theme_mod( 'navaz_header_logo' ); ?>" alt="logo" > </a>
                </div>
            </div>
            <div class="col-md-9">
            <?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'menu_id' => 'nav' ) );?>

            </div>
        </div>
    </div>
</header>