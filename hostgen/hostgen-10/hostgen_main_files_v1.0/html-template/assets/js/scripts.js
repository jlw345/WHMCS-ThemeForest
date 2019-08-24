/*---------------------------------------------
Template name:  HostGen
Version:        1.1
Author:         ThemeLooks
Author url:     http://themelooks.com

NOTE:
------
Please DO NOT EDIT THIS JS, you may need to use "custom.js" file for writing your custom js.
We may release future updates so it will overwrite this file. it's better and safer to use "custom.js".

[Table of Content]

01: Main menu
02: Sticky Nav
03: Video Popup
04: Image Popup
05: Background Image
06: Smooth Scroll for Comment Reply
07: Retina JS
08: Check Data
09: Owl Carousel
10.CountDown
11.Counter Up
12: Parsley form validation 
13: Changing svg color 
14: Team Hover Animation 
15: Back to Top Button 
16: Ajax Contact Form 
17: Google map 
18: Content Animation
19: Preloader 
20: Hosting Pricing Table Responsive 
21: Domain Pricing Table Responsive 
22: FAQ
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

    /*========================
    03: Video Popup
    ==========================*/
    var $youtubePopup = $('.youtube-popup');
    if($youtubePopup.length) {
        $youtubePopup.magnificPopup({
            type:'iframe'
        });
    };

    /*========================
    04: Image Popup
    ==========================*/
    $('.social-img').magnificPopup({
        delegate: 'a',
        type:'image',
        gallery:{
            enabled: true
        },
        callbacks: {
            beforeOpen: function() {
            this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
            this.st.mainClass = this.st.el.attr('data-effect');
            }
        },
        retina: {
            ratio: 2,
            replaceSrc: function(item, ratio) {
            return item.src.replace(/\.\w+$/, function(m) { return '@2x' + m; });
            }
        }
    });

    /*========================
    05: Background Image
    ==========================*/
    var $bgImg = $('[data-bg-img]');
    $bgImg.css('background-image', function () {
        return 'url("' + $(this).data('bg-img') + '")';
    }).removeAttr('data-bg-img').attr('data-rjs', 2);

    /*==================================
    06: Smooth Scroll for Comment Reply
    ====================================*/
    var $commentContent = $('.comment-content > a');     
    $commentContent.on('click', function(){
        var $target = $('.comment-form');
            
        if ( $target.length ) {
            $('html, body').animate({
                scrollTop: $target.offset().top - 120
            }, 800);

            $target.find('textarea').focus();
        }
    });

    /*==================================
    07: Retina JS
    ====================================*/
    retinajs();

    /*==================================
    08: Check Data
    ====================================*/
    var checkData = function (data, value) {
        return typeof data === 'undefined' ? value : data;
    };


    /*==================================
    09: Owl Carousel
    ====================================*/
    var $owlCarousel = $('.owl-carousel');
     
    $owlCarousel.each(function () {
        var $t = $(this);
            
        $t.owlCarousel({
            items: checkData( $t.data('owl-items'), 1 ),
            margin: checkData( $t.data('owl-margin'), 0 ),
            loop: checkData( $t.data('owl-loop'), true ),
            smartSpeed: 450,
            autoplay: checkData( $t.data('owl-autoplay'), true ),
            autoplayTimeout: checkData( $t.data('owl-speed'), 8000 ),
            center: checkData( $t.data('owl-center'), false ),
            animateOut: checkData( $t.data('owl-animate'), false ),
            nav: checkData( $t.data('owl-nav'), false ),
            navText: ['<img src="assets/img/icons/angle_left.svg" class="svg">', '<img src="assets/img/icons/angle_right.svg" class="svg">'],
            dots: checkData( $t.data('owl-dots'), false ),
            responsive: checkData( $t.data('owl-responsive'), {} )
        });
    });

    /*==================================
    10: CountDown
    ====================================*/
    var $countDown = $('[data-countdown]');
            
    $countDown.each(function () {
        var $t = $(this);
            
        $t.countdown($t.data('countdown'), function(e) {
            $(this).html( '<ul class="list-inline">' + e.strftime('<li><span>Days</span><br><strong>%D</strong></li><li><span>Hours</span><br><strong>%H</strong></li><li><span>Minutes</span><br><strong>%M</strong></li><li><span>Seconds</span><br><strong>%S</strong></li>') + '</ul>' );
        });
    });

    /*==================================
    11: Counter Up
    ====================================*/
    $(".count").counterUp({
        delay: 30,
        time: 2000
    });
    
    /*==================================
    12: Parsley form validation 
    ====================================*/

    $('.parsley-validate, .parsley-validate-wrap form').parsley();

    /*==================================
    13: Changing svg color 
    ====================================*/
    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');
        
        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');
        
            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
            }
    
            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');
            
            // Check if the viewport is set, else we gonna set it if we can.
            if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'));
            }
    
            // Replace image with new SVG
            $img.replaceWith($svg);
        
        }, 'xml');
    });

    /*==================================
    14: Team Hover Animation 
    ====================================*/
    $(".single-team").on("mouseover", function(){
        $(".single-team .team-hover h4").removeClass("animated fadeInUp");
        $(this).find(".team-hover h4").addClass("animated fadeInUp");

        $(".single-team .team-hover span").removeClass("animated fadeInUp");
        $(this).find(".team-hover span").addClass("animated fadeInUp");

        $(".single-team .team-hover p").removeClass("animated fadeInUp");
        $(this).find(".team-hover p").addClass("animated fadeInUp");

        $(".single-team .team-hover .team-social-icon").removeClass("animated fadeInUp");
        $(this).find(".team-hover .team-social-icon").addClass("animated fadeInUp");
    });


    /*==================================
    15: Back to Top Button 
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
    16: Ajax Contact Form 
    ====================================*/

    $('.contact-form').on('submit', 'form', function(e) {
        e.preventDefault();

        var $el = $(this);

        $.post($el.attr('action'), $el.serialize(), function(res){
            res = $.parseJSON( res );
            $el.parent('.contact-form').find('.form-response').html('<span>' + res[1] + '</span>');
        });
    });

    /*==================================
    17: Google map 
    ====================================*/

    var $map = $('[data-trigger="map"]'),
        $mapOps;

    if ( $map.length ) {
        // Map Options
        $mapOps = $map.data('map-options');

        // Map Initialization
        window.initMap = function () {
        $map.css('min-height', '571px');
            $map.each(function () {
            var $t = $(this), map, lat, lng, zoom;
            var contentString = '<div id="mapcontent">'+
                '<h4>HostGen Headquarter</h4>'+
                    '<p>#320 Pleasant Hill Rd, Ewing Ave, NY</p>'+
                    '</div>';
                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                $mapOps = $t.data('map-options');
                lat = parseFloat($mapOps.latitude, 10);
                lng = parseFloat($mapOps.longitude, 10);
                zoom = parseFloat($mapOps.zoom, 10);

                map = new google.maps.Map($t[0], {
                    center: {lat: lat, lng: lng},
                    zoom: zoom,
                    scrollwheel: false,
                    disableDefaultUI: true,
                    zoomControl: true,
                    styles: [
                        {
                            "featureType": "landscape.man_made",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#f7f1df"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape.natural",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#d0e3b4"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape.natural.terrain",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.business",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.medical",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#fbd3da"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#bde6ab"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffe15f"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#efd151"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "black"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.station.airport",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#cfb2db"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#a2daf2"
                                }
                            ]
                        }
                    ] 
                });

                map = new google.maps.Marker({
                    position: {lat: lat, lng: lng},
                    map: map,
                    animation: google.maps.Animation.DROP,
                    draggable: false,
                    icon: 'assets/img/marker.png'
                });

                google.maps.event.addListener(map, 'click', (function(map) {
                    return function() {
                        infowindow.setContent( contentString );
                        infowindow.open( map, map );
                    }
                })(map));
            });
        };

        // Map Script
        var googleAPI = document.createElement('script');

        googleAPI.type = 'text/javascript';
        googleAPI.src = 'https://maps.googleapis.com/maps/api/js?key='+ $mapOps.api_key +'&callback=initMap';

        $('body').append( googleAPI );
    };

    /*==================================
    18: Content Animation
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
            }, {offset: '1000'});
        });
    });

    /*==================================
    19: Preloader 
    ====================================*/
    $(window).on('load', function(){
        $('.preloader').fadeOut(1000);
    });

    /*==================================
    20: Hosting Pricing Table Responsive 
    ====================================*/
    992 > $(window).width() && $(".pricing-table-item.body li").each(function() {
        var b =
            $(this),
                C = b.index(),
                C = $(".pricing-table-item").find("li").eq(C).html();
            b.prepend('<span class="labelText">' + C + "</span>")
    });

    /*==================================
    21: Domain Pricing Table Responsive
    ====================================*/
    992 > $(window).width() && $(".domain-pricing-table table tbody td").each(function() {
        var b =
        $(this),
            C = b.index(),
            C = $(".domain-pricing-table table thead").find("th").eq(C).text();
        b.prepend('<span class="labelText">' + C + "</span>")
    });

    /*==================================
    22: FAQ
    ====================================*/
    $(".faq-question").on("click", function(b) {
        $(this).parents(".single-faq").children(".collapse").hasClass("show") &&
            (b.stopPropagation(), b.preventDefault())
    });
}(jQuery));