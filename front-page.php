<?php
/**
 * Theme Front Page
 */
get_header();?>


<!-- bxSlider start -->
<!-- <?php // get_template_part( 'template_part/bxSlider' ); ?>  -->
<!-- bxSlider end -->

<!-- owl-carousel (shortcode use's) -->
<?php  get_template_part( 'template_part/owl-carousel' ); ?> 
<!-- owl-carousel  end -->

<!-- custom post service (shortcode use's) -->
<?php  get_template_part( 'template_part/custom_post_service' ); ?> 

<!-- inside page service (shortcode use's) -->
<section id="home_widget_area" class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="text-uppercase"> Our Gallery</h3>
                <p class="w-50 mx-auto ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam accusamus explicabo eum aliquam odio repellat?</p>
            </div>
            <div class="col-md-12"> 

                <!-- Dynamic inside_page_shortcode  start -->
                <?php 
                        if ( shortcode_exists( 'inside_page_shortcode' ) ) {
                            echo do_shortcode('[inside_page_shortcode]');
                        } else {
                            echo '<p>The shortcode "inside_page_shortcode" does not exist.</p>';
                        }
                    ?>
                <!-- Dynamic inside_page_shortcode  end -->
            </div>
        </div>
    </div>
</section>

<!-- custom post project (shortcode use's) -->
<?php  get_template_part( 'template_part/custom_post_project' ); ?> 

<?php get_footer();?>


<!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Error incidunt commodi nobis atque cupiditate vel ullam, nesciunt enim maiores, in necessitatibus? Labore quos quidem ullam debitis dolor necessitatibus qui totam? -->
