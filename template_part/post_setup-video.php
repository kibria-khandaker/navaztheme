<p> Video Format Setup </p>
<?php
if ( have_posts() ):
    while ( have_posts() ): the_post();
        ?>
            <div class="blog_area">
                <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ) ?>"></span>
                <p> Video Format Post Setup </p>
                <div class="post_thumb">
                    <!-- post-thumbnails -->
                    <a href="<?php the_permalink();?>">
                        <?php if ( has_post_thumbnail() ) {?>
                            <?php echo get_the_post_thumbnail( get_the_ID(), 'post-thumbnail' ); ?>
                        <?php } else {?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/demo_img_1.jpg" alt="logo">
                        <?php }?>
                    </a>
                </div>
                <div class="post_details">
                    <h2><a href="<?php the_permalink();?>"> <?php the_title();?></a></h2>
                    <?php the_content();?>
                </div>
            </div>
            <?php endwhile;
else:
    _e( 'No Post found','navaztheme' );
endif;?>

