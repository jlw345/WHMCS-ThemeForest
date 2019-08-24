/*

[Main Script]

*/

(function ($) {
    'use strict';
    
    $(function () {
        /* ------------------------------------------------------------------------- *
         * CUSTOM BACKGROUND IMAGE
         * ------------------------------------------------------------------------- */
        var bgSrc = $('[data-bg-src]');
        
        bgSrc.each(function () {
            var $this = $(this),
                imgValue = $this.data('bg-src');
            $this.css('background-image', 'url(' + imgValue + ')');
        });
        
        /* ------------------------------------------------------------------------- *
         * FIXED MENU
         * ------------------------------------------------------------------------- */
        var wn = $(window),
        $el = {
            menu: $('#menu'),
            header: $('#header'),
            mainMenu: $('#main-menu'),
            nav: $('#nav')
        },
        elHW = {
            menuH: $el.menu.outerHeight(),
            headerH: $el.header.outerHeight(),
            menuHeaderH: function () {
                return elHW.menuH + elHW.headerH;
            },
            navH: $el.nav.outerHeight()
        },
        elF = {
            navShow: function () {
                return wn.scrollTop() > elHW.menuHeaderH() ? $el.nav.addClass('sticky') : $el.nav.removeClass('sticky');
            }
        };
        
        $el.mainMenu.css('height', elHW.navH);
        
        elF.navShow();
        
        /* ------------------------------------------------------------------------- *
         * BACK TO TOP BUTTON
         * ------------------------------------------------------------------------- */
        var $backToTopBtn = $('#backToTop'),
            showBackToTopBtn = function () {
                return wn.scrollTop() > 1 ? $backToTopBtn.addClass('show') : $backToTopBtn.removeClass('show');
            };
        
        $backToTopBtn.on('click', function () {
            $('html, body').animate({
                scrollTop: 0
            }, 500);
            
            return false;
        });
        
        if ( $backToTopBtn.length ) {
            showBackToTopBtn();
        }
        
        /* ------------------------------------------------------------------------- *
         * ON SCROLL
         * ------------------------------------------------------------------------- */
        wn.on('scroll', function () {
            /* FIXED MENU */
            elF.navShow();
            
            /* SHOW BACK TO TOP BUTTON */
            if ( $backToTopBtn.length ) {
                showBackToTopBtn();
            }
        });
        
        /* -------------------------------------------------------------------------*
         * FORM VALIDATION
         * -------------------------------------------------------------------------*/
        var subscribeForm = $('#subscribeForm');
        if ( subscribeForm.length ) {
            subscribeForm.validate({
                rules: {
                    EMAIL: {
                        required: true,
                        email: true
                    }
                },
                errorPlacement: function (error, element) {
                    return true;
                }
            });
        }
        
        var contactForm = $('#contactForm')
        ,   contactFormStatus = $('.contact-form-status');
        
        if ( contactForm.length ) {
            contactForm.validate({
                rules: {
                    contactName: "required",
                    contactEmail: {
                        required: true,
                        email: true
                    },
                    contactSubject: "required",
                    contactMessage: "required"
                },
                errorPlacement: function (error, element) {
                    return true;
                },
                submitHandler: function(e) {
                    var formData = contactForm.serialize(); // serialize the form data
                    
                    /* Submit the form using AJAX */
                    $.ajax({
                        type: 'POST',
                        url: contactForm.attr('action'),
                        data: formData
                    })
                    .done(function(response) {
                        contactFormStatus.show().html(response).delay(1000).fadeOut("slow");
                    });
                }
            });
        }
        
        var postCommentForm = $('#postCommentForm');
        
        if ( postCommentForm.length ) {
            postCommentForm.validate({
                rules: {
                    name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    comments: "required"
                },
                errorPlacement: function (error, element) {
                    return true;
                }
            });
        }
        
        /* -------------------------------------------------------------------------*
         * TOOLTIP
         * -------------------------------------------------------------------------*/
        var $tooltip = $('[data-toggle="tooltip"]');
        
        if ( $tooltip.length ) {
            $tooltip.tooltip();
        }
        
        /* -------------------------------------------------------------------------*
         * OWL CAROUSEL
         * -------------------------------------------------------------------------*/
        var testimonialSlider = $('.testimonial-slider')
        ,   testimonialCustomPagination = function () {
                $.each(this.owl.userItems, function (i) {
                    var recommenderThumb = jQuery(this).data('recommender-thumb');
                    var paginationLinks = jQuery('.testimonial-slider .owl-page span');

                    $(paginationLinks[i]).html('<img src="'+ recommenderThumb +'" alt="" class="img-responsive" />');
                });
            };
            
        if ( testimonialSlider.length ) {
            if (testimonialSlider.children('.testimonial-item').length > 3) {
                testimonialSlider.addClass('overload');
            }
            testimonialSlider.owlCarousel({
                slideSpeed: 700,
                paginationSpeed: 700,
                singleItem: true,
                autoPlay: true,
                addClassActive: true,
                afterInit: testimonialCustomPagination,
                afterUpdate: testimonialCustomPagination
            });
        }
        
        var brandsSlider = $('.brands-slider');
            
        if ( brandsSlider.length ) {
            brandsSlider.owlCarousel({
                slideSpeed: 700,
                paginationSpeed: 700,
                items: 5,
                autoPlay: true,
                pagination: false
            });
        }
        
        /* -------------------------------------------------------------------------*
         * COUNTER
         * -------------------------------------------------------------------------*/
        var counterNum = $('.counter-number');
            
        if ( $(counterNum).length ) {
            $(counterNum).counterUp({
                delay: 10,
                time: 1000
            });
        }
        
        /* -------------------------------------------------------------------------*
         * MAP
         * -------------------------------------------------------------------------*/
        var map, marker, myLatLng;
        
        function initMap() {
            myLatLng = {lat: 23.790546, lng: 90.375583};
            
            map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 16,
                scrollwheel: false,
                disableDefaultUI: true,
                zoomControl: true
            });
            
            marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                animation: google.maps.Animation.DROP,
                draggable: true
            });
            
            if ( wn.width() < 767 ) {
                map.setOptions({draggable: false});
            }
        }
        
        if ( $("#map").length ) {
            initMap();
        }
        
        function initMap2() {
            var locations = [
                ['Hanota Sagar', 23.737385, 78.757671, 4],
                ['গুলশান, ঢাকা', 23.789747, 90.3929248, 5],
                ['Gannan, Gansu, China', 34.9862056, 102.8388954, 3],
                ['মুম্বই, মহারাষ্ট্র, India', 19.0825223, 72.7411178, 2],
                ['Mahaoya, Sri Lanka', 7.8784551, 81.2146297, 4]
            ];
            
            map = new google.maps.Map(document.getElementById('map2'), {
                center: new google.maps.LatLng(20.9124975, 73.7479053),
                zoom: 5,
                scrollwheel: false,
                disableDefaultUI: true,
                zoomControl: true
            });

            var marker, i;

            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map
                });
            }
            
            if ( wn.width() < 767 ) {
                map.setOptions({draggable: false});
            }
        }
        
        if ( $("#map2").length ) {
            initMap2();
        }
        
        /* -------------------------------------------------------------------------*
         * PRICING TABLE LABEL
         * -------------------------------------------------------------------------*/
        if ( wn.width() < 992 ) {
            $('#compare table td, #pricingTable2 table td').each(function () {
                $(this).prepend('<span class="labelText">'+ $(this).data('label') + '</span>');
            });
        }
        
        /* ------------------------------------------------------------------------- *
         * TWITTER FEED
         * ------------------------------------------------------------------------- */
        var tweetsContainer = $('#tweets');
        
        if ( tweetsContainer.length ) {
            var config = {
                "id": tweetsContainer.data('twitter-id'),
                "domId": 'tweets',
                "maxTweets": tweetsContainer.data('posts'),
                showTime: false,
                showUser: false,
                "showInteraction": false
            };
            
            twitterFetcher.fetch(config);
        }
        
        /* ------------------------------------------------------------------------- *
         * LIVE CHAT WIDGET
         * ------------------------------------------------------------------------- */
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date(),
            $tawk = document.createElement("script");
            
        $tawk.async=true;
        $tawk.src='https://embed.tawk.to/57dfd4b85dc7a25e92808cf6/default';
        $tawk.charset='UTF-8';
        $tawk.setAttribute('crossorigin','*');
        
        $($tawk).appendTo('body');
    });
    
    $(window).on('load', function () {
        /* ------------------------------------------------------------------------- *
         * PRELOADER
         * ------------------------------------------------------------------------- */
        var $preloader = $('#preloader');
        
        if ( $preloader.length ) {
            $preloader.fadeOut('slow');
        }
    });
})(jQuery);
