<?php
// Wordpress Shortcode

// a basic shortcode example
function navaz_basic_shortcode() {
    return "this is my Shortcode text";
}
add_shortcode( 'basic_text_shortcode', 'navaz_basic_shortcode' );
// example use's : [basic_text_shortcode]

// a button shortcode for using URL 
function navaz_button_shortcode( $atts, $content = null ) {
    $values = shortcode_atts( array(
        'url' => '#',
    ), $atts );
    return '<a class="but_shortcode" target="_blank" href="' . esc_attr( $values['url'] ) . '">' . $content . '</a>';
}
add_shortcode( 'button_shortcode', 'navaz_button_shortcode' );
// example use's : [button_shortcode url="https://netkib.com"]Learn more[/button_shortcode]


// Shortcode & Custom Post or Service custom post ( Advance type shortcode )
function navaz_service_shortcode( $atts ) {
    ob_start();
// query_posts( 'post_type=service&post_status=publish&posts_per_page=3&order=ASC&paged=' . get_query_var( 'post' ) );
    $query = new WP_Query( array(
        'post_type'      => 'service',
        'posts_per_page' => 3,
        'order'          => 'ASC',
        'orderby'        => 'title',
    ) );
    if ( $query->have_posts() ){ ?> 

        <section id="service_area">
            <div class="container">
                <div class="row">

                <?php while (  $query->have_posts() ):  $query->the_post();?>
                <div class="col-md-4">
                    <div class="child_service">
                        <h2> <?php the_title(); ?> </h2>
                        <?php echo the_post_thumbnail('service'); ?>
                        <?php the_excerpt(); ?>                        
                    </div>
                </div>
                <?php
                    endwhile; wp_reset_postdata();
                ?>
                </div>
            </div>
        </section>

    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
add_shortcode( 'service_shortcode', 'navaz_service_shortcode' );
