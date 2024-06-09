<section id="slider_area">
    <div class="container">
        <div class="row">
            <div class="slider">

            <?php
                    query_posts( 'post_type=slider&post_status=publish&posts_per_page=3&order=ASC&paged=' . get_query_var( 'post' ) );
                    if ( have_posts() ):
                        while ( have_posts() ): the_post();
                ?>
                <div class="slider_main_img">
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
</section>


