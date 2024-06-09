<span class="text-center d-block">archive.php</span>
<?php 
/**
 * The template for archive page
 */
get_header();
?>


<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="archive_head">
                    <?php 
                        the_archive_title('<h3 class=archive_title">','</h3>');
                        the_archive_description( '<div class="archive__description">','</div>' );
                    ?>
                    
                </div>
                <?php get_template_part( 'template_part/blog_setup' ); ?>                
            </div>

            <div class="col-md-3">
                <?php get_sidebar(); ?>
                
            </div>

        </div>
    </div>
</section>


<?php get_footer(); ?>

