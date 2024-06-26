<?php 
/**
 * Template Name: About Page
 */
get_header();
?>

<section id="body_area" class="about_page">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto text-center">

            <?php 
                // Check if the post has a featured image
                if ( has_post_thumbnail() ) {
                    // Display the featured image
                    the_post_thumbnail( 'full', array( 'class' => 'mx-auto rounded-3 my-4' ) );
                } else {
                    // Fallback image
                    ?>
                    <img class="mx-auto rounded-3 my-4" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">

             <?php // get_template_part( 'template_part/post_setup' ); ?>  
             <?php the_content(); ?>
              
            </div> 
        </div>
    </div>
</section>


<?php get_footer(); ?>

