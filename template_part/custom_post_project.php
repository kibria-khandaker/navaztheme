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
                _e( 'No project found','navaztheme' );
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