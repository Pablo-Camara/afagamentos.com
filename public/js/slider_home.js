;(function($) {
    "use strict";


    //*  Main slider js
    function home_main_slider(){
        if ( $('.slider_inner').length ){
            $('.slider_inner').camera({
                loader: true,
                navigation: false,
                autoPlay:false,
                time: 1000000,
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
	   home_main_slider();

})(jQuery);
