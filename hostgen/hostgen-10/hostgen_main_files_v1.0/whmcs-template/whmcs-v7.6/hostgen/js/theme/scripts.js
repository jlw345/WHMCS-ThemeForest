/*---------------------------------------------
Template name:  HostGen
Version:        1.1
Author:         ThemeLooks
Author url:     http://themelooks.com

NOTE:
------
Please DO NOT EDIT THIS JS, you may need to use "custom.js" file for writing your custom js.
We may release future updates so it will overwrite this file. it's better and safer to use "custom.js".
----------------------------------------------*/


(function ($) {
    "use strict";
    


    /*===================
    01: Main Menu
    =====================*/

    $('.main-menu a[href="#"]').on('click', function(event) {
        event.preventDefault();
    });

    $(".main-menu").menumaker({
        title: '<i class="fa fa-bars"></i>',
        format: "multitoggle"
    });

    /*========================
    02: Sticky Nav
    ==========================*/
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();
        if (scroll < 70) {
            $(".header").removeClass("header-fixed fadeInDown animated");
        } 
        else {
            $(".header").addClass("header-fixed fadeInDown animated");
        }
    });



    /*==================================
    03: Back to Top Button
    ====================================*/
    var amountScrolled = 400;
    var backBtn = $("a.back-top");

    $(window).on("scroll", function () {

        if ($(window).scrollTop() > amountScrolled) {
            backBtn.addClass("visible");
        } else {
            backBtn.removeClass("visible");
        }

    });
    backBtn.on("click", function () {
        $("html, body").animate({
            scrollTop: 0
        }, 700);
        return false;
    });

    /*==================================
    04: Content Animation
    ====================================*/

    $(window).on('load', function(){

        var $animateEl = $('[data-animate]');

        $animateEl.each(function () {
            var $el = $(this),
                $name = $el.data('animate'),
                $duration = $el.data('duration'),
                $delay = $el.data('delay');

            $duration = typeof $duration === 'undefined' ? '0.6' : $duration ;
            $delay = typeof $delay === 'undefined' ? '0' : $delay ;

            $el.waypoint(function () {
                $el.addClass('animated ' + $name)
                   .css({
                        'animation-duration': $duration + 's',
                        'animation-delay': $delay + 's'
                   });
            }, {offset: '95%'});
        });
    });

    /*==================================
    05: Preloader
    ====================================*/
    $(window).on('load', function(){
        $('.preloader').fadeOut(1000);
    });

    /*==================================
    06: Parsley form validation 
    ====================================*/

    $('.parsley-validate, .parsley-validate-wrap form').parsley();

}(jQuery));