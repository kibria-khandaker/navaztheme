<?php

// Theme Title
add_theme_support( 'title-tag' );

// Thumbnail Image area
add_theme_support( 'post-thumbnails', array( 'page', 'post', 'service','slider' ) );
add_image_size( 'post-thumbnails', 970, 350, true );

function navaz_theme_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
}
add_action( 'after_setup_theme', 'navaz_theme_setup' );

// Custom 'Read More' link
function navaz_read_more( $more ) {
    global $post;
    return ' <br/><br/> <a class="post_read_more_btn" href="' . get_permalink( $post->ID ) . '">Read More</a> <br/><br/>';
}
add_filter( 'excerpt_more', 'navaz_read_more' );

// Limit excerpt length to 40 words
function navaz_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'navaz_excerpt_length', 999 );

// Page pagination nav Function
function navaz_pagenav() {
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;

    if ( !$current = get_query_var( 'paged' ) ) {
        $current = 1;
    }

    $args['base'] = str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) );
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = 'Prev';
    $args['next_text'] = 'Next';
    if ( $max > 1 ) {
        echo '</pre>
      <div class="wp_pagenav">';
    }

    if ( $total == 1 && $max > 1 ) {
        $pages = '<p class="pages"> Page ' . $current . '<span>of</span>' . $max . '</p>';
    }

    echo $pages . paginate_links( $args );
    if ( $max > 1 ) {
        echo '</div><pre>';
    }

}



// a Function to Display the Template Name || front-end view for everyone

function get_current_template() {
    global $template;
    return basename($template);
}






// a Function to Display the Template Name || result show in  "View Page Source" like <!-- Template: page.php --> ===========

// function show_template() {    // show it to everyone (not recommended for  logged-in super admins)
//     global $template;    
//     echo '<!-- Template: ' . basename($template) . ' -->';
// }
// add_action('wp_head', 'show_template');


// function show_template() {
//     if (is_super_admin()) { // Only show to logged-in super admins
//         global $template;
//         echo '<!-- Template: ' . basename($template) . ' -->';
//     }
// }
// add_action('wp_head', 'show_template');


// function show_template() {
//     if (is_user_logged_in()) { // Show to all logged-in users
//         global $template;
//         echo '<!-- Template: ' . basename($template) . ' -->';
//     }
// }
// add_action('wp_head', 'show_template');






