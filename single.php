<span class="text-center d-block">single.php</span>
<?php 
/**
 * The template display single blog
 */
get_header();
?>


<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php get_template_part( 'template_part/post_setup', get_post_format() ); ?>  
                <div id="comments_area">
                    <h1>Comments </h1>
                    <?php if(comments_open()): ?>                    
                        <?php comments_template(); ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-md-3">
                <?php get_sidebar(); ?>
                
            </div>

        </div>
    </div>
</section>


<?php get_footer(); ?>

