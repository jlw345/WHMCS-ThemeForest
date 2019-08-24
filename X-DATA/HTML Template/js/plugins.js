/**********************

Author:  WHMCSdes
Template: X-DATA - WMHCS & HTML Web Hosting Template
Version: 1.0
Author URI: whmcsdes.com

***************************/

(function ($) {
    "use strict"

    // Layout Green
    $(".green-o").on('click', function () {
        $("link[href*='theme']").attr("href", "css/" + $(this).val() + ".css");
    });

    // Layout Sky
    $(".sky-o").on('click', function () {
        $("link[href*='theme']").attr("href", "css/" + $(this).val() + ".css");
    });

    // Layout Yellow
    $(".yellow-o").on('click', function () {
        $("link[href*='theme']").attr("href", "css/" + $(this).val() + ".css");
    });

    // Layout Violet
    $(".violet-o").on('click', function () {
        $("link[href*='theme']").attr("href", "css/" + $(this).val() + ".css");
    });

    // Layout cog
    $('.icon-cog').on('click', function () {
        if ($(this).css("margin-left") == "187px") {
            $('.box-layout').animate({
                "margin-left": '-=187'
            });
            $('.icon-cog').animate({
                "margin-left": '-=187'
            });
        } else {
            $('.box-layout').animate({
                "margin-left": '+=187'
            });
            $('.icon-cog').animate({
                "margin-left": '+=187'
            });
        }
    });

    // Testimontial Carousel
    $('.owl-carousel').owlCarousel({
        items: 1,
        loop: true
    });

    // Live Chat 
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/578d545ce7623dae37bd4125/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();

    // TeamWork Carousel
    $('.team-owl').owlCarousel({
        items: 1
    });

    // Scroll
    $("html").niceScroll();
    
    // SmoothScroll
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });

    // Counter 
    var austDay = new Date(2016, 12 - 1, 25);
    austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
    $('#defaultCountdown').countdown({
        until: austDay
    });

    // Owl Carousel Shortcode
    $('.owl-carousel-short').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    }); 

})(jQuery);