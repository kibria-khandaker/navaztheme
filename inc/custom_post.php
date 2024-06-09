<?php

function navaz_custom_service() {
    register_post_type( 'service',
        array(
                'labels'        => array(
                'name'          => __( 'Services', 'navaztheme' ),
                'singular_name' => __( 'Service', 'navaztheme' ),
                'add_new'       => __( 'Add New Service', 'navaztheme' ),
                'add_new_item'  => __( 'Add new service', 'navaztheme' ),
                'edit_item'     => __( 'Edit Service', 'navaztheme' ),
                'new_item'      => __( 'New Service', 'navaztheme' ),
                'view_item'     => __( 'View Service', 'navaztheme' ),
                'view_items'    => __( 'View Services', 'navaztheme' ),
                'not_found'     => __( 'No Services found.', 'navaztheme' ),
            ),
            'menu_icon'           => 'dashicons-welcome-write-blog',
            'public'              => true,
            'publicly_queryable'  => true,
            'has_archive'         => true,
            'hierarchical'        => true,
            'exclude_from_search' => true,
            'show_ui'             => true,
            'menu_position'       => 5,
            'capability_type'     => 'post',
            'taxonomies'          => array('category'),
            'rewrite'             => array( 'slug' => 'service' ),
            'supports'            => array( 'title', 'thumbnail', 'editor','excerpt' ),
        )
    );
}
add_action( 'init', 'navaz_custom_service' );


function navaz_custom_slider() {
    register_post_type( 'slider',
        array(
                'labels'        => array(
                'name'          => __( 'Sliders', 'navaztheme' ),
                'singular_name' => __( 'Slider', 'navaztheme' ),
                'add_new'       => __( 'Add New Slider', 'navaztheme' ),
                'add_new_item'  => __( 'Add new Slider', 'navaztheme' ),
                'edit_item'     => __( 'Edit Slider', 'navaztheme' ),
                'new_item'      => __( 'New Slider', 'navaztheme' ),
                'view_item'     => __( 'View Slider', 'navaztheme' ),
                'view_items'    => __( 'View Sliders', 'navaztheme' ),
                'not_found'     => __( 'No Sliders found.', 'navaztheme' ),
            ),
            'menu_icon'           => 'dashicons-images-alt2',
            'public'              => true,
            'publicly_queryable'  => true,
            'has_archive'         => true,
            'hierarchical'        => true,
            'exclude_from_search' => true,
            'show_ui'             => true,
            'menu_position'       => 5,
            'capability_type'     => 'post',
            'rewrite'             => array( 'slug' => 'slider' ),
            'supports'            => array( 'title', 'thumbnail', 'editor','excerpt' ),
        )
    );
}
add_action( 'init', 'navaz_custom_slider' );


function navaz_custom_project() {
    register_post_type( 'project',
        array(
                'labels'        => array(
                'name'          => __( 'Projects', 'navaztheme' ),
                'singular_name' => __( 'Project', 'navaztheme' ),
                'add_new'       => __( 'Add New Project', 'navaztheme' ),
                'add_new_item'  => __( 'Add new Project', 'navaztheme' ),
                'edit_item'     => __( 'Edit Project', 'navaztheme' ),
                'new_item'      => __( 'New Project', 'navaztheme' ),
                'view_item'     => __( 'View Project', 'navaztheme' ),
                'view_items'    => __( 'View Projects', 'navaztheme' ),
                'not_found'     => __( 'No Projects found.', 'navaztheme' ),
            ),
            'menu_icon'           => 'dashicons-embed-post',
            'public'              => true,
            'publicly_queryable'  => true,
            'has_archive'         => true,
            'hierarchical'        => true,
            'exclude_from_search' => true,
            'show_ui'             => true,
            'menu_position'       => 5,
            'capability_type'     => 'post',
            'taxonomies'          => array('category'),
            'rewrite'             => array( 'slug' => 'project' ),
            'supports'            => array( 'title', 'thumbnail', 'editor','excerpt' ),
        )
    );
}
add_action( 'init', 'navaz_custom_project' );


function navaz_query_post_type($query){
    if(is_category()){
        $post_type = get_query_var( 'post_type' );
        if ($post_type) {
            $post_type =$post_type;
        }else{
            $post_type = array('post','service');
            $query -> set('post_type',$post_type);
            return $query;
        }
    }
}
add_filter('pre_get_posts','navaz_query_post_type');