<span class="text-center d-block">index.php</span>
<?php 
/**
 * The template 404 page
 */
get_header();
?>


<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 error_page">
                <p> 404 Error - Page not Found </p>
                <h4> Oops! Looks Like something was wrong </h4>
                <div class="error_search">
                    <?php get_search_form(); ?>
                </div>
                <a href="<?php echo home_url(); ?>" class="error_home_btn" >Back To Home </a>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

