<section id="service_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-5">
                <h3 class="text-uppercase"> Here top Services </h3>
                <p class="w-50 mx-auto ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam accusamus explicabo eum aliquam odio repellat?</p>
            </div>
                <!-- Dynamic Service  start -->
                    <?php 
                        if ( shortcode_exists( 'service_shortcode' ) ) {
                            echo do_shortcode('[service_shortcode]');
                        } else {
                            echo '<p>The shortcode "service_shortcode" does not exist.</p>';
                        }
                    ?>
                <!-- Dynamic Service  end -->
        </div>
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <a class="post_read_more_btn my-3 px-5" href="<?php print home_url() ?>/service"> All Services </a>
            </div>
        </div>
    </div>
</section>