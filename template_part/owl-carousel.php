<section id="owl_slider_area">
    <div class="container">
        <div class="row">
            <div class="owl_slider_box">
                <!-- Dynamic slider  start -->
                <?php 
                    if ( shortcode_exists( 'slider_shortcode' ) ) {
                        echo do_shortcode('[slider_shortcode]');
                    } else {
                        echo '<p>The shortcode "slider_shortcode" does not exist.</p>';
                    }
                ?>
                <!-- Dynamic slider  end -->
            </div>
        </div>
    </div>
</section>