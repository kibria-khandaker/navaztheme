<?php
// Wordpress Shortcode

// a basic shortcode example
function basic_shortcode() {
    return "this is my new Shortcode";
}
add_shortcode( 'text_shortcode', 'basic_shortcode' );

// a button shortcode for using URL
function my_button_shortcode( $atts, $content = null ) {
    $values = shortcode_atts( array(
        'url' => '#',
    ), $atts );
    return '<a class="but_shortcode" href="' . esc_attr( $values['url'] ) . '">' . $content . '</a>';
}
add_shortcode( 'button_shortcode', 'my_button_shortcode' );

// Shortcode & Custom Post or Service custom post ( Advance type shortcode )
function my_service_shortcode( $atts ) {
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
add_shortcode( 'service_shortcode', 'my_service_shortcode' );
