// bxSlider start 
jQuery(document).ready(function () {

    // Active slicknav menu -------------
    jQuery('#nav').slicknav();

    // bxSlider -------------
    jQuery(".slider").bxSlider({
        mode: 'fade',
        captions: true,
    });

    // owl-carousel 1-------------
    // jQuery(".owl-carousel").owlCarousel();
    // jQuery("#owl-slider").owlCarousel({
    //     items:2,
    // });

    // owl-carousel 2-------------
    jQuery('.owl-carousel').owlCarousel({
        stagePadding: 0,
        loop:true,
        margin:5,
        nav:true,
        autoplay:false,
        autoplayTimeout:1500,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:1
            }
        }
    })



    /* my Contact Form 7 || simulate form submit */
    jQuery("form").on("submit", function (e) {
        e.preventDefault();
        jQuery(".ajax-loader").css({ display: "inline-block" });
        setTimeout(() => {
            jQuery(".ajax-loader").css({ display: "none" });
        }, 2000);
    });




});


