
<?php
    if ( have_posts() ):
        while ( have_posts() ): the_post();
            ?>
            
                <div class="col-md-4">
                    <div class="blog_area">                
                        <div class="post_thumb">
                            <a href="<?php the_permalink();?>">
                                <?php if ( has_post_thumbnail() ) {?>
                                    <?php echo get_the_post_thumbnail( get_the_ID(), 'service' ); ?>
                                <?php } else {?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/demo_img_1.jpg" alt="logo">
                                <?php }?>
                            </a>
                        </div>
                        <div class="post_details">
                            <h2 class="multiBoxTitle" ><a class="" href="<?php the_permalink();?>"> <?php the_title();?></a></h2>
                            <p class="post_date"> 
                                <i class="fa-solid fa-calendar-days"></i>  <?php echo the_time('D, d F Y'); ?>
                                <span>At</span> 
                                <i class="fa-solid fa-clock"></i> <?php echo the_time('G : i'); ?>
                            </p>
                            <?php the_excerpt();?>
                        </div>
                    </div>
                </div>
            
            <?php
        endwhile;
    else:
        _e( 'No Post found','navaztheme' );
    endif;
?>
<div id="page_nav">
    <?php if ( 'navaz_pagenav' ) {navaz_pagenav();} else {?>
        <?php next_posts_link();?>
        <?php previous_posts_link();?>
    <?php }?>
</div>
