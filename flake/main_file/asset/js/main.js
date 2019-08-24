(function($) {
    'use strict';

    //MOBILE MENU

    $('#mainmenu').slicknav({
        prependTo: '.navigation'
    });


    //NICE SELECT

    $('select').niceSelect();

    //EMBED RESPONSIVE

    $(".embed-responsive iframe").addClass("embed-responsive-item");

    //TOOL TIP

    $('[data-toggle="tooltip"]').tooltip();

    // COUNTER UP

    $(".counter").counterUp({
        delay: 10,
        time: 5000
    });

    // SERVICE TEASTIMONIAL

    $(".service-teatimonial").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        nextArrow: $('.service-nav-right'),
        prevArrow: $('.service-nav-left'),
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    //TEAM-CAROSUEL

    $(".team-carosuel").owlCarousel({
        items: 4,
        loop: true,
        nav: true,
        navText: ["<span class='ti-angle-left'>", "<span class='ti-angle-right'>"],
        autoplay: false,
        mouseDrag: false,
        margin: 30,
        responsive: {
            0: {
                items: 1,
            },
            500: {
                items: 2,
            },
            1000: {
                items: 4,
            }
        }
    });

    //HOMEPAGE-SLIDER-1

    $(".homepage-slider-1").owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        dotsSpeed: 2000,
        autoplay: false,
        mouseDrag: false,
    });

    $('.testi-carousel').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        nextArrow: $('.testi-nav-right'),
        prevArrow: $('.testi-nav-left'),
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

        //ALL-BRAND-CARSOUL

    $('.all-brand-carsouel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            }
        }
    })

    //ALL-FAMEWORK-CAFSOUEL

    $('.all-famework-carsouel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            }
        }
    })


    //TAB ANIMATAION SLIDE

    jQuery('.tabs.animated-slide-2 .tab-links a').on('click', function(e) {
        var currentAttrValue = jQuery(this).attr('href');

        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).slideDown(400).siblings().slideUp(400);

        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

        e.preventDefault();
    });
    

     //WOW ANIMATION
        
    new WOW().init();



    //DATE COUNTDOWN 

    $('[data-countdown]').each(function() {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime(
                '<div class="cdown"><span class="days"><strong>%-D</strong><p>Days.</p></span></div><div class="cdown"><span class="hour"><strong> %-H</strong><p>Hours.</p></span></div> <div class="cdown"><span class="minutes"><strong>%M</strong> <p>MINUTES.</p></span></div><div class="cdown"><span class="second"><strong> %S</strong><p>SECONDS.</p></span></div>'
            ));
        });
    });




    jQuery(window).load(function() {

        $(".stick").sticky({ topSpacing: 0 });


    });




})(jQuery);