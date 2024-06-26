<?php 
/** 
 * Theme Footer Section
 * It is a common footer for all page
 * */ 
?>

<footer id="footer_area" class="">

    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="copyright_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright_area_items">
                        <!-- <p><?php // echo esc_html( $navaz_copyright_setting ); ?></p> -->
                        <p>
                            <?php print get_theme_mod('navaz_copyright_setting'); ?>                        
                        </p>
                        <p> +||+ </p>
                        <p> <small> Template Name : <?php echo get_current_template(); ?></small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</footer>



<?php wp_footer();?>
</body>
</html>