<?php 

// Theme Title
add_theme_support( 'title-tag' );

// Thumbnail Image area
add_theme_support('post-thumbnails', array('page','post'));
add_image_size( 'post-thumbnails', 970,350,true );

function navaz_theme_setup(){
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'post-formats', array( 'aside', 'gallery','link','image','quote','status','video','audio','chat' ) );
}
add_action( 'after_setup_theme','navaz_theme_setup' );