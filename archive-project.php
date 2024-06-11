<span class="text-center d-block">archive-project.php</span>
<?php 
/**
 * The template for archive-project page
 */
get_header();
?>


<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="archive_head">
                    <h1> All Projects </h1>
                        <?php 
                            the_archive_description( '<div class="archive__description">','</div>' );
                        ?>
                </div>
            </div>
            <?php get_template_part( 'template_part/project-child' ); ?>                
        </div>
    </div>
</section>


<?php get_footer(); ?>

