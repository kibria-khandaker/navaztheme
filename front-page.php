<span class="text-center d-block">front-page.php</span>
<?php
/**
 * Theme Front Page
 */
get_header();?>


<!-- bxSlider start -->
<?php // get_template_part( 'template_part/bxSlider' ); ?> 
<!-- bxSlider end -->
<!-- owl-carousel  start -->
<?php // get_template_part( 'template_part/owl-carousel' ); ?> 
<!-- owl-carousel  end -->

<section id="home_widget_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12   "> 
                <?php // dynamic_sidebar( 'home-1' ); ?> 
            </div>
        </div>
    </div>
</section>


<section id="service_area">
    <div class="container">
        <div class="row">

        <?php
            query_posts( 'post_type=service&post_status=publish&posts_per_page=3&order=ASC&paged=' . get_query_var( 'post' ) );
            if ( have_posts() ):
                while ( have_posts() ): the_post();
        ?>
        <div class="col-md-4">
            <div class="child_service">
                <h2> <?php the_title(); ?> </h2>
                <?php echo the_post_thumbnail('service'); ?>
                <?php the_excerpt(); ?>
                
            </div>
        </div>
        <?php
                endwhile;
            else:
                _e( 'No Service found','rowthemedevelopment' );
            endif;
        ?>

        </div>
    </div>
</section>



<section id="service_area">
    <div class="container">
        <div class="row">

        <?php
            query_posts( 'post_type=project&post_status=publish&posts_per_page=3&order=ASC&paged=' . get_query_var( 'post' ) );
            if ( have_posts() ):
                while ( have_posts() ): the_post();
        ?>
        <div class="col-md-4">
            <div class="child_service">
                <h2> <?php the_title(); ?> </h2>
                <?php echo the_post_thumbnail('project'); ?>
                <?php the_excerpt(); ?>
                
            </div>
        </div>
        <?php
                endwhile;
            else:
                _e( 'No project found','rowthemedevelopment' );
            endif;
        ?>

        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php print home_url() ?>/project"> All Project </a>
            </div>
        </div>
    </div>
</section>


<?php get_footer();?>