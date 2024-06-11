
<section id="owl_slider_area">
    <div class="container">
        <div class="row">
            <div class="owl_slider_box">
                <div class="owl-carousel owl-theme">
                    <?php
                        query_posts( 'post_type=slider&post_status=publish&posts_per_page=5&order=ASC&paged=' . get_query_var( 'post' ) );
                        if ( have_posts() ):
                            while ( have_posts() ): the_post();
                    ?>
                    <div class="item">

                            <?php echo the_post_thumbnail('slider'); ?>

                            <div class="owl_slider_text">
                                <h2 class=" text-"><?php echo the_title('slider'); ?></h2>
                                <p><?php the_excerpt();?></p>
                                <a class="post_read_more_btn" href="<?php the_permalink();?>">Learn More</a>
                            </div>

                    </div>
                    <?php
                            endwhile;
                        else:
                            _e( 'No Service found','navaztheme' );
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>