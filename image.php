<span class="text-center d-block">image.php</span>
<?php
/**
 * The template display image blog
 */
get_header();
?>


<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php get_template_part( 'template_part/post_setup' );?>
                <!-- <?php // var_export($post);  ?> -->
                <!-- <p> <a href="<?php // echo $post->guid; ?>" alt="<?php // the_title(); ?>" ></a> </p> -->
                <p> <a href="<?php echo esc_url($post->guid); ?>"  alt="<?php esc_attr(the_title()); ?>"></a> </p>

                <!-- https://developer.wordpress.org/reference/functions/get_allowed_mime_types/  -->
            </div>
        </div>
    </div>
</section>


<?php get_footer();?>

