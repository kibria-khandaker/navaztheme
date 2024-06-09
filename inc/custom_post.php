<?php

function custom_service() {
    register_post_type( 'service',
        array(
                'labels'        => array(
                'name'          => __( 'Services', 'rowthemedevelopment' ),
                'singular_name' => __( 'Service', 'rowthemedevelopment' ),
                'add_new'       => __( 'Add New Service', 'rowthemedevelopment' ),
                'add_new_item'  => __( 'Add new service', 'rowthemedevelopment' ),
                'edit_item'     => __( 'Edit Service', 'rowthemedevelopment' ),
                'new_item'      => __( 'New Service', 'rowthemedevelopment' ),
                'view_item'     => __( 'View Service', 'rowthemedevelopment' ),
                'view_items'    => __( 'View Services', 'rowthemedevelopment' ),
                'not_found'     => __( 'No Services found.', 'rowthemedevelopment' ),
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
add_action( 'init', 'custom_service' );


function custom_slider() {
    register_post_type( 'slider',
        array(
                'labels'        => array(
                'name'          => __( 'Sliders', 'rowthemedevelopment' ),
                'singular_name' => __( 'Slider', 'rowthemedevelopment' ),
                'add_new'       => __( 'Add New Slider', 'rowthemedevelopment' ),
                'add_new_item'  => __( 'Add new Slider', 'rowthemedevelopment' ),
                'edit_item'     => __( 'Edit Slider', 'rowthemedevelopment' ),
                'new_item'      => __( 'New Slider', 'rowthemedevelopment' ),
                'view_item'     => __( 'View Slider', 'rowthemedevelopment' ),
                'view_items'    => __( 'View Sliders', 'rowthemedevelopment' ),
                'not_found'     => __( 'No Sliders found.', 'rowthemedevelopment' ),
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
add_action( 'init', 'custom_slider' );


function custom_project() {
    register_post_type( 'project',
        array(
                'labels'        => array(
                'name'          => __( 'Projects', 'rowthemedevelopment' ),
                'singular_name' => __( 'Project', 'rowthemedevelopment' ),
                'add_new'       => __( 'Add New Project', 'rowthemedevelopment' ),
                'add_new_item'  => __( 'Add new Project', 'rowthemedevelopment' ),
                'edit_item'     => __( 'Edit Project', 'rowthemedevelopment' ),
                'new_item'      => __( 'New Project', 'rowthemedevelopment' ),
                'view_item'     => __( 'View Project', 'rowthemedevelopment' ),
                'view_items'    => __( 'View Projects', 'rowthemedevelopment' ),
                'not_found'     => __( 'No Projects found.', 'rowthemedevelopment' ),
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
add_action( 'init', 'custom_project' );


function query_post_type($query){
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
add_filter('pre_get_posts','query_post_type');