<?php
// sidebar Register Function
function navaz_widgets_register(){
	register_sidebar( array(
		'name'          => __( 'Main Widgets', 'navaztheme' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'This widgets area will be shown page side', 'navaztheme' ),
		'before_widget'	=> '<div class="widget_sidebar_box">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h2 class="widget_sidebar_title">',
		'after_title'	=> '</h2>',
    ) );

	register_sidebar( array(
		'name'          => __( 'Footer 1 Widgets', 'navaztheme' ),
		'id'            => 'footer-1',
		'description'   => __( 'This widgets area will be shown page Footer', 'navaztheme' ),
		'before_widget'	=> '<div class="widget_footer_box">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h6 class="widget_footer_title">',
		'after_title'	=> '</h6>',
    ) );

	register_sidebar( array(
		'name'          => __( 'Footer 2 Widgets', 'navaztheme' ),
		'id'            => 'footer-2',
		'description'   => __( 'This widgets area will be shown page Footer', 'navaztheme' ),
		'before_widget'	=> '<div class="widget_footer_box">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h6 class="widget_footer_title">',
		'after_title'	=> '</h6>',
    ) );

	register_sidebar( array(
		'name'          => __( 'Footer 3 Widgets', 'navaztheme' ),
		'id'            => 'footer-3',
		'description'   => __( 'This widgets area will be shown page Footer', 'navaztheme' ),
		'before_widget'	=> '<div class="widget_footer_box">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h6 class="widget_footer_title">',
		'after_title'	=> '</h6>',
    ) );

	register_sidebar( array(
		'name'          => __( 'Home page Widgets', 'navaztheme' ),
		'id'            => 'home-1',
		'description'   => __( 'This widgets area will be shown page Home page', 'navaztheme' ),
		'before_widget'	=> '<div class="widget_homepage_box">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h6 class="widget_homepage_title">',
		'after_title'	=> '</h6>',
    ) );

}
add_action( 'widgets_init','navaz_widgets_register');