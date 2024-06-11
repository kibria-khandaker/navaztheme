<?php
/**
 * Theme Front Page
 */
get_header();?>


<!-- bxSlider start -->
<!-- <?php // get_template_part( 'template_part/bxSlider' ); ?>  -->
<!-- bxSlider end -->
<!-- owl-carousel  start -->
<?php  get_template_part( 'template_part/owl-carousel' ); ?> 
<!-- owl-carousel  end -->


<?php  get_template_part( 'template_part/custom_post_service' ); ?> 

<section id="home_widget_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12   "> 
                <?php dynamic_sidebar( 'home-1' ); ?> 
            </div>
        </div>
    </div>
</section>

<?php  get_template_part( 'template_part/custom_post_project' ); ?> 



<?php get_footer();?>