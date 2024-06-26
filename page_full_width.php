<?php 
/**
 * Template Name: Full Width Page
 */
get_header();
?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
             <?php // get_template_part( 'template_part/post_setup' ); ?>  
             <?php the_content(); ?>
             
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

