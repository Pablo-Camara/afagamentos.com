;(function($) {
    "use strict";


    //*  portfolio slider js
    function portfolio_main_slider(){
        if ( $('.slider_inner').length ){
            $('.slider_inner').camera({
                loader: true,
                navigation: true,
                autoPlay: false,
                time: 4000,
                playPause: false,
                pagination: false,
                thumbnails: false,
                overlayer: false,
                hover: false,
                minHeight: '500px',
            });
        }
    }


    /*Function Calls*/

    new WOW().init();
	   portfolio_main_slider();

})(jQuery);
