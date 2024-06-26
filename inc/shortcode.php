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

    $query = new WP_Query( array(
        'post_type'      => 'service',
        'posts_per_page' => 3,
        'order'          => 'ASC',
        'orderby'        => 'title',
    ) );

    if ( $query->have_posts() ) { ?>
        <section id="service_area">
            <div class="container">
                <div class="row">
                    <?php while ( $query->have_posts() ): $query->the_post(); ?>
                        <div class="col-md-4">
                            <div class="child_item_box">
                                <a href="<?php the_permalink();?>">
                                    <?php if ( has_post_thumbnail() ) {?>
                                        <?php echo get_the_post_thumbnail( get_the_ID(), 'service' ); ?>
                                    <?php } else {?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/demo_img_1.jpg" alt="logo">
                                    <?php }?>
                                </a>
                                <h2><?php the_title(); ?></h2>
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <?php
        wp_reset_postdata();
    }

    $myvariable = ob_get_clean();
    return $myvariable;
}
add_shortcode( 'service_shortcode', 'navaz_service_shortcode' );


// Shortcode & Custom Post or project custom post ( Advance type shortcode )
function navaz_project_shortcode( $atts ) {
    ob_start();

    $query = new WP_Query( array(
        'post_type'      => 'project',
        'posts_per_page' => 3,
        'order'          => 'ASC',
        'orderby'        => 'title',
    ) );

    if ( $query->have_posts() ) { ?>
        <section id="service_area">
            <div class="container">
                <div class="row">
                    <?php while ( $query->have_posts() ): $query->the_post(); ?>
                        <div class="col-md-4">
                            <div class="child_item_box">
                                <a href="<?php the_permalink();?>">
                                    <?php if ( has_post_thumbnail() ) {?>
                                        <?php echo get_the_post_thumbnail( get_the_ID(), 'project' ); ?>
                                    <?php } else {?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/demo_img_1.jpg" alt="logo">
                                    <?php }?>
                                </a>
                                <h2><?php the_title(); ?></h2>
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <?php
        wp_reset_postdata();
    }

    $myvariable = ob_get_clean();
    return $myvariable;
}
add_shortcode( 'project_shortcode', 'navaz_project_shortcode' );


function navaz_slider_shortcode(){
    ob_start();
    ?>

        <div class="owl-carousel owl-theme">
            <?php
                query_posts( 'post_type=slider&post_status=publish&posts_per_page=3&order=ASC&paged=' . get_query_var( 'post' ) );
                if ( have_posts() ):
                    while ( have_posts() ): the_post();
            ?>
            <div class="item">
                    <a href="<?php the_permalink();?>">
                        <?php if ( has_post_thumbnail() ) {?>
                            <?php echo get_the_post_thumbnail( get_the_ID(), 'slider' ); ?>
                        <?php } else {?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/slider_img.jpg" alt="logo">
                        <?php }?>
                    </a>
                    <div class="owl_slider_text">
                        <h2 class=" text-"><?php echo the_title(); ?></h2>
                        <p><?php the_excerpt();?></p>                                
                        <!-- <a class="post_read_more_btn" href="<?php // the_permalink();?>">Learn about slider </a> -->
                    </div>
            </div>
            <?php
                    endwhile;
                else:
                    _e( 'No Service found','navaztheme' );
                endif;
            ?>
        </div>

    <?php 
}
add_shortcode( 'slider_shortcode', 'navaz_slider_shortcode' );


// Inside Page Widgets Shortcode
function navaz_inside_page_1_shortcode() {
    dynamic_sidebar( 'inside_page_1' );
}
add_shortcode( 'inside_page_shortcode', 'navaz_inside_page_1_shortcode' );


