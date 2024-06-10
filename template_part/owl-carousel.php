
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