<?php 
/**
 * Template Name: Contact Page
 */
get_header();
?>

<section id="body_area" class="contact_Form_7">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto my-auto"> 
                <?php 
                // Check if the post has a featured image
                if ( has_post_thumbnail() ) {
                    // Display the featured image
                    the_post_thumbnail( 'full', array( 'class' => 'w-100 rounded-3 my-4' ) );
                } else {
                    // Fallback image
                    ?>
                    <img class="w-100 rounded-3 my-4" src="<?php echo get_template_directory_uri(); ?>/img/contact_page_1.png" alt="logo">
                    <?php
                }
                ?>
            </div> 
            <div class="col-md-7 mx-auto my-auto">
                <?php the_content(); ?>
            </div> 
        </div>
    </div>
</section>

<?php get_footer(); ?>
