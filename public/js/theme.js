;(function($) {
    "use strict";

    //* mainNavbar
    function mainNavbar(){
        if ( $('#main_navbar').length ){
             $('#main_navbar').affix({
                offset: {
                    top: 10,
                    bottom: function () {
                        return (this.bottom = $('.footer').outerHeight(true))
                    }
                }
            });
        };
    };



    //* Isotope Js
    function portfolio_isotope(){
        if ( $('.portfolio_item, .portfolio_2 .portfolio_filter ul li').length ){
            // Activate isotope in container
            $(".portfolio_item").imagesLoaded( function() {
                $(".portfolio_item").isotope({
                    itemSelector: ".single_facilities",
                    layoutMode: 'masonry',
                    percentPosition:true,
                    masonry: {
                        columnWidth: ".grid-sizer, .grid-sizer-2"
                    }
                });
            });

            // Activate isotope in container
            $(".portfolio_2").imagesLoaded( function() {
                $(".portfolio_2").isotope({
                    itemSelector: ".single_facilities",
                    layoutMode: 'fitRows',
                });
            });
            // Add isotope click function
            $(".portfolio_filter ul li").on('click',function(){
                $(".portfolio_filter ul li").removeClass("active");
                $(this).addClass("active");

                var selector = $(this).attr("data-filter");
                $(".portfolio_item, .portfolio_2").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 450,
                        easing: "linear",
                        queue: false,
                    }
                });
                return false;
            });
        }
    };

  

     //* counterUp JS
    function counterUp(){
        if ( $('.counter').length ){
            $('.counter').counterUp({
                delay: 10,
                time: 900,
            });
        }
    };

    //* Testimonial Carosel
    function testimonialsCarosel(){
        if ( $('.testimonial_carosel').length ){
            $('.testimonial_carosel').owlCarousel({
                loop:true,
                items:1,
                autoplay:false,
            });
        };
    };
    //* Testimonial Carosel
    function partnersCarosel(){
        if ( $('.partners').length ){
            $('.partners').owlCarousel({
                loop:true,
                items:5,
                margin:110,
                autoplay:true,
                response:true,
                responsive:{
                    300:{
                        items:1,
                        margin:0,
                    },
                    500:{
                        items:3,
                    },
                    700:{
                        items:3,
                    },
                    800:{
                        items:4,
                        margin:40,
                    },
                    1000:{
                        items:5,
                    },
                }
            });
        };
    };

    //* waypoint JS
    function ourSkrill(){
         if ( $('.our_skill_inner').length ){
             $(".our_skill_inner").each(function() {
                $(this).waypoint(function() {
                    var progressBar = $(".progress-bar");
                    progressBar.each(function(indx){
                        $(this).css("width", $(this).attr("aria-valuenow") + "%")
                    })
                },
                {
                    triggerOnce: true,
                    offset: 'bottom-in-view'

                });
            });
         }
    };

     //* counterUp 2 JS
    function counterUp2(){
        if ( $('.counter2').length ){
            $('.counter2').counterUp({
                delay: 10,
                time: 200,
            });
        }
    };

    //* Hide Loading Box (Preloader)
     function preloader(){
        if ( $('.preloader').length ){
             $(window).load(function() {
                $('.preloader').delay(500).fadeOut('slow');
                $('body').delay(500).css({'overflow':'visible'});
            });
        }
    };

    /*Function Calls*/

    new WOW().init();
    testimonialsCarosel ();
    portfolio_isotope ();
    counterUp ();
    partnersCarosel ();
    ourSkrill ();
    counterUp2 ();
    mainNavbar ();
    preloader ();

})(jQuery);
