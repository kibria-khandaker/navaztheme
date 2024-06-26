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
                    <h2 class="w-"> All Services </h2>
                        <?php 
                            the_archive_description( '<div class="archive__description">','</div>' );
                        ?>
                </div>
            </div>
            <?php get_template_part( 'template_part/service-child' ); ?>                
        </div>
    </div>
</section>


<?php get_footer(); ?>

