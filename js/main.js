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
        stagePadding: 50,
        loop:true,
        margin:5,
        nav:true,
        autoplay:true,
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
                items:3
            }
        }
    })



});


