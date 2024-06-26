<section id="service_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-5">
                <h3 class="text-uppercase"> Our Some Projects </h3>
                <p class="w-50 mx-auto ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam accusamus explicabo eum aliquam odio repellat?</p>
            </div>                
                <!-- Dynamic Project  start -->
                <?php 
                    if ( shortcode_exists( 'project_shortcode' ) ) {
                        echo do_shortcode('[project_shortcode]');
                    } else {
                        echo '<p>The shortcode "project_shortcode" does not exist.</p>';
                    }
                ?>
                <!-- Dynamic Project  end -->
        </div>
        <div class="row">
            <div class="col-md-12 text-center mt-3 mb-5">
                <a class="post_read_more_btn  px-5" href="<?php print home_url() ?>/project"> All Projects </a>
            </div>
        </div>
    </div>
</section>