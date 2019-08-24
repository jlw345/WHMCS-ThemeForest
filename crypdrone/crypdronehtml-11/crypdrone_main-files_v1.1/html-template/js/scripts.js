/*---------------------------------------------
Template name:  crypdrone
Version:        1.0
Author:         ThemeLooks
Author url:     http://themelooks.com

NOTE:
------
Please DO NOT EDIT THIS JS, you may need to use "custom.js" file for writing your custom js.
We may release future updates so it will overwrite this file. it's better and safer to use "custom.js".

[Table of Content]

01: Main menu
02: Background image
03: Parsley form validation
04: Smooth scroll for comment reply
05: share transform
06: Check Data
07: Back to top button
08: Changing svg color
09: Ajax Contact Form
10: Intro item height
11: Preloader
12: Content animation
13: Pricing plan activation
14: counter up
15: Parallax
16: faq always open
17: Google map
18: Count down home page1
19: Count down home page 2
20: team carousel activation
21: price carousel
22: testimonial carousel activation
23: partner carousel activation
24: timeline2 carousel activation
25: timeline carousel activation
26: partner carousel2 activation
27: road map activation
28: magnificPopup installation
29: Pie Chart dark Activation
30: Pie Chart dark Activation
31: update chart


----------------------------------------------*/

    (function($) {
        "use strict";

            /* 01: Main menu
            ==============================================*/

            $('.header-menu a[href="#"]').on('click', function(event) {
                event.preventDefault();
            });

            $(".header-menu").menumaker({
                title: '<i class="fa fa-bars"></i>',
                format: "multitoggle"
            });

            var mainHeader = $('.main-header');

            if($(window).scrollTop() > 100){
               $('.main-header').addClass('sticky fadeInDown'); 
           };
            $(window).on('scroll', function(e){
                if($(this).scrollTop() < 100){
                    $('.main-header').removeClass('sticky fadeInDown')
                }else
                    $('.main-header').addClass('sticky fadeInDown')        
                });

            /* 02: Background image
            ==============================================*/

            var bgImg = $('[data-bg-img]');

            bgImg.css('background', function(){
                return 'url(' + $(this).data('bg-img') + ') center center';
            });


            /* 03: Parsley form validation
            ==============================================*/

            $('.parsley-validate, .parsley-validate form').parsley();


            /* 04: Smooth scroll for comment reply
            ==============================================*/
            
            var $commentContent = $('.comment-content > a');
            
            $commentContent.on('click', function(event){
                event.preventDefault();
                var $target = $('.comment-form');
                
                if ( $target.length ) {
                    $('html, body').animate({
                        scrollTop: $target.offset().top - 120
                    }, 500);

                    $target.find('textarea').focus();
                }
            });

    /*=========================================
        05: share transform
    =============================================*/
    (function(){
        var w = $(window).width();
            $('.social-comment ul:last-child li:first-child').on('click',function(){
            $(this).parents('ul').toggleClass('transform');
        })  
    })();

/*==================================
    06: Check Data
    ====================================*/
    var checkData = function (data, value) {
        return typeof data === 'undefined' ? value : data;
    };
        /*============================================
            07: Back to top button
        ==============================================*/

        var $backToTopBtn = $('.back-to-top');

        if ($backToTopBtn.length) {
            var scrollTrigger = 400, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $backToTopBtn.addClass('show');
                } else {
                    $backToTopBtn.removeClass('show');
                }
            };

            backToTop();

            $(window).on('scroll', function () {
                backToTop();
            });

            $backToTopBtn.on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            });
        }


        /* 08: Changing svg color
        ==============================================*/

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

        /* 09: Ajax Contact Form
        ==============================================*/

      
         $('.contact-form').on('submit', 'form', function(e) {
            e.preventDefault();

            var $el = $(this);

            $.post($el.attr('action'), $el.serialize(), function(res){
                res = $.parseJSON( res );
                $el.parent('.contact-page-form').find('.form-response').html('<span>' + res[1] + '</span>');
            });
        });


        /* 10: Intro item height
        ==============================================*/

        function pageItemHeight(){
            $('.page-image').height(
                function(){
                    return $(this).width();
                }
            );
        }

        pageItemHeight();
        
        $(window).resize( function(){
            pageItemHeight();
        });

      
    
    /* 11: Preloader
    ==============================================*/

    $(window).on('load', function(){

        function removePreloader() {
            var preLoader = $('.preLoader');
            preLoader.fadeOut();
        }
        setTimeout(removePreloader, 250);
    });


    /* 12: Content animation
    ==============================================*/

    $(window).on('load', function(){

        var $animateEl = $('[data-animate]');

        $animateEl.each(function () {
            var $el = $(this),
                $name = $el.data('animate'),
                $duration = $el.data('duration'),
                $delay = $el.data('delay');

            $duration = typeof $duration === 'undefined' ? '0.6' : $duration ;
            $delay = typeof $delay === 'undefined' ? '.1' : $delay ;

            $el.waypoint(function () {
                $el.addClass('animated ' + $name)
                   .css({
                        'animation-duration': $duration + 's',
                        '-ms-animation-duration' : $duration + 's',
                        'animation-delay': $delay + 's',
                        '-ms-animation-delay' : $delay + 's',
                        'visibility': 'visible',
                   });
            }, {offset: '96%'});
        });

    });
    /*===============================================
        13: Pricing plan activation
    ===============================================*/
    if($('.single--pricing-plan') != 0){
        $('.single--pricing-plan').on('mouseenter',function(){
            $(this).addClass('active').parent().siblings().children().removeClass('active');
        })
    }
    /*=========================================================
        14: counter up
    =========================================================*/
           $('.counter').counterUp({});
         
       /*====================================================
            15: Parallax
       ====================================================*/
        var $parallaxLayers = $('[data-trigger="parallax_layers"]');

        if( $parallaxLayers.length ){
            $parallaxLayers.each(function () {
                new Parallax( $(this)[0], {
                    selector: '[data-depth]'
                });
            });
        }
    /*=============================================
        16: faq always open
    =============================================*/
       $(".single-faq .faq-question").on("click", function(event) {
        $(this).parents(".single-faq").children(".collapse").hasClass("show") &&
            (event.stopPropagation(), event.preventDefault())
    });
/*===================================================
        17: Google map
===================================================*/
    //Google Map
    if($('#google-map').length){
        var googleMapSelector = $('#google-map'),
            myCenter = new google.maps.LatLng(40.6785635, -73.9664109);

        function initialize() {
            var mapProp = {
                center: myCenter,
                zoom: 11,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
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
            };
            var map = new google.maps.Map(document.getElementById("google-map"), mapProp);
            var marker = new google.maps.Marker({
                position: myCenter,
                icon: 'img/locator.png'
            });
            marker.setMap(map);
        }
        if (googleMapSelector.length) {
            google.maps.event.addDomListener(window, 'load', initialize);
        }
    }



/*===================================================
    18: Count down home page1
===================================================*/

 var $countDown = $('[data-countdown]');
        $countDown.each(function () {
            var $t = $(this);
            
            $t.countdown($t.data('countdown'), function(e) {
                $(this).html( '<ul class="list-unstyled">' + e.strftime('<li><strong>%D</strong><span>D</span></li><li><strong>%H</strong><span>H</span></li><li><strong>%M</strong><span>M</span></li><li><strong>%S</strong><span>S</span></li>') + '</ul>' );
            });
        });
/*===================================================
    19: Count down home page 2
===================================================*/
var $countDown = $('[data-countdown2]');
        $countDown.each(function () {
            var $t = $(this);
            
            $t.countdown($t.data('countdown2'), function(e) {
                $(this).html( '<ul class="list-unstyled">' + e.strftime('<li><span>Day</span><strong>%D</strong></li><li><span>Hours</span><strong>%H</strong></li><li><span>Month</span><strong>%M</strong></li><li><span>Secs</span><strong>%S</strong></li>') + '</ul>' );
            });
        });

/*===========================================
        20: team carousel activation
===========================================*/
    $('.team-carousel').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dot: false,
        autoWidth:true,
        autoplay:true,
        autoplayTimeout: 5000,
        autoplaySpeed: 4000,
        responsive:{
            0:{
                items:1
            },
            320:{
                items:3,
                center: true
            },
            767:{
                items:5,
                center: true
            },
            1024:{
                items:7,
                center: true
            }
        }
    })

/*=====================================================
    21: price carousel
=====================================================*/
    $('.price-carousel').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        dots:false,
        navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        responsive:{
            0:{
                items:1,
                margin:30
            },
            400:{
                items:2
            },
            500:{
                items: 3
            },
            768:{
                items: 5
            },
            1000:{
                items:8
            },
            1200:{
                items:10
            }
        }
    })


/*===========================================
        22: testimonial carousel activation
===========================================*/

    $('.testimonial-carousel').owlCarousel({
        loop:true,
        margin:60,
        stagePadding: 30,
        dots:true,
        center:true,
        autoplay:true,
        autoplayTimeout: 5000,
        autoplaySpeed: 4000,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1
            },
            700:{
                items:1
            },
            991:{
                items:1
            },
            1000:{
                items:3
            }
        }
    })

/*===========================================
        23: partner carousel activation
===========================================*/
    $('.partner-carousel').owlCarousel({
        loop:true,
        margin:80,
        dots:true,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })

/*===========================================
        24: timeline2 carousel activation
===========================================*/
    $('.timeline-carousel2').owlCarousel({
        loop:true,
        margin:30,
        dots:false,
        center: true,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            },
            1200:{
                items:5,
            }
        }
    })
/*===========================================
        25: timeline carousel activation
===========================================*/
    $('.timeline-carousel').owlCarousel({
        loop:true,
        margin:30,
        dots:false,
        nav:false,
        center:true,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1
            },
            600:{
                items:5
            },
            1000:{
                items:7
            },
            1200:{
                items:9
            }
        }
    })
/*===========================================
        26: partner carousel2 activation
===========================================*/

    $('.partner-carousel2').owlCarousel({
        loop:true,
        margin:80,
        dots:true,
        nav:false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 4000,
        center:true,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:3
            },
            600:{
                items:5
            },
            1000:{
                items:7
            }
        }
    })

/*======================================
    27: road map activation
======================================*/
$('.road-map-dot').on('mouseenter',function(){
    $(this).parent().children('.roadmap--hover-item').css({
            'visibility' : 'visible',
            'opacity' : '1',
            'z-index' : '10'
    }).parents('.owl-item').siblings().find('.roadmap--hover-item').css({
                 'visibility': 'hidden',
                 'opacity' : '0'
     })
})
/*=====================================================
        28: magnificPopup installation
=====================================================*/
 var c = $('[data-popup="img"]');
        c.length && c.magnificPopup({
            type: "image"
        });
        c = $('[data-popup="video"]');
        c.length && c.magnificPopup({
            type: "iframe"
        });
 /*=================================================
    29: Pie Chart dark Activation 
=================================================*/
if($('#token--pie-chart-dark').length){
var dom = document.getElementById("token--pie-chart-dark");
var myChart = echarts.init(dom);
var app = {};
var option = null;
option = {
    backgroundColor: 'transparent',

    title: {
        text: '',
        left: 'center',
        top: 20,
        textStyle: {
            color: '#ccc'
        }
    },

    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },

    visualMap: {
        show: false,
        min: 80,
        max: 600,
        inRange: {
            colorLightness: [0, 1]
        }
    },
    series : [
        {
            name:'token',
            type:'pie',
            radius : '90%',
            center: ['50%', '50%'],
            data:[
                {value:350, name:'35'},
                {value:180, name:'18'},
                {value:220, name:'22'},
                {value:280, name:'28'},
                {value:300, name:'30'},
                {value:320, name:'32'}
            ].sort(function (a, b) { return a.value - b.value; }),
            roseType: 'radius',
            label: {
                normal: {
                    textStyle: {
                        color: '#53e1ff'
                    }
                }
            },
            labelLine: {
                normal: {
                    lineStyle: {
                        color: '#53e1ff'
                    },
                    smooth: 0.2,
                    length: 10,
                    length2: 20
                }
            },
            itemStyle: {
                normal: {
                    color: '#127bee',
                    shadowBlur: 200,
                    shadowColor: 'rgba(0,0,0,.2)'
                }
            },

            animationType: 'scale',
            animationEasing: 'elasticOut',
            animationDelay: function (idx) {
                return Math.random() * 200;
            }
        }
    ]
};;
if (option && typeof option === "object") {
    myChart.setOption(option, false);
}
}

 /*=================================================
        30: Pie Chart dark Activation 
=================================================*/
if($('#token--pie-chart-light').length){
var dom = document.getElementById("token--pie-chart-light");
var myChart = echarts.init(dom);
var app = {};
var option = null;
option = {
    backgroundColor: 'transparent',

    title: {
        text: '',
        left: 'center',
        top: 20,
        textStyle: {
            color: '#ccc'
        }
    },

    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },

    visualMap: {
        show: false,
        min: 80,
        max: 600,
        inRange: {
            colorLightness: [0, 1]
        }
    },
    series : [
        {
            name:'token',
            type:'pie',
            radius : '90%',
            center: ['50%', '50%'],
            data:[
                {value:350, name:'35'},
                {value:180, name:'18'},
                {value:220, name:'22'},
                {value:280, name:'28'},
                {value:300, name:'30'},
                {value:320, name:'32'}
            ].sort(function (a, b) { return a.value - b.value; }),
            roseType: 'radius',
            label: {
                normal: {
                    textStyle: {
                        color: '#53e1ff'
                    }
                }
            },
            labelLine: {
                normal: {
                    lineStyle: {
                        color: '#53e1ff'
                    },
                    smooth: 0.2,
                    length: 10,
                    length2: 20
                }
            },
            itemStyle: {
                normal: {
                    color: '#127bee',
                    shadowBlur: 200,
                    shadowColor: 'rgba(255,255,255,.2)'
                }
            },

            animationType: 'scale',
            animationEasing: 'elasticOut',
            animationDelay: function (idx) {
                return Math.random() * 200;
            }
        }
    ]
};;
if (option && typeof option === "object") {
    myChart.setOption(option, false);
}
}

/*===================================================
    31: update chart
===================================================*/
if($('#update-chart').length){
var dom = document.getElementById("update-chart");
var myChart = echarts.init(dom);
var app = {};
var option = null;
var dataAxis = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20'];
var data = [220, 182, 191, 234, 290, 330, 310, 123, 442, 321, 90, 149, 210, 122, 133, 334, 198, 123, 125, 220];
var yMax = 500;
var dataShadow = [];

for (var i = 0; i < data.length; i++) {
    dataShadow.push(yMax);
}

option = {
    title: {
        text: '',
        subtext: ''
    },
    xAxis: {
        data: dataAxis,
        axisLabel: {
            inside: true,
            textStyle: {
                color: '#fff'
            }
        },
        axisTick: {
            show: false
        },
        axisLine: {
            show: false
        },
        z: 10
    },
    yAxis: {
        axisLine: {
            show: false
        },
        axisTick: {
            show: false
        },
        axisLabel: {
            textStyle: {
                color: '#999'
            }
        }
    },
    dataZoom: [
        {
            type: 'inside'
        }
    ],
    series: [
        { // For shadow
            type: 'bar',
            itemStyle: {
                normal: {color: 'rgba(0,0,0,0.05)'}
            },
            barGap:'-100%',
            barCategoryGap:'40%',
            data: dataShadow,
            animation: false
        },
        {
            type: 'bar',
            itemStyle: {
                normal: {
                    color: new echarts.graphic.LinearGradient(
                        0, 0, 0, 1,
                        [
                            {offset: 0, color: '#83bff6'},
                            {offset: 0.5, color: '#188df0'},
                            {offset: 1, color: '#188df0'}
                        ]
                    )
                },
                emphasis: {
                    color: new echarts.graphic.LinearGradient(
                        0, 0, 0, 1,
                        [
                            {offset: 0, color: '#2378f7'},
                            {offset: 0.7, color: '#2378f7'},
                            {offset: 1, color: '#83bff6'}
                        ]
                    )
                }
            },
            data: data
        }
    ]
};

// Enable data zoom when user click bar.
var zoomSize = 6;
myChart.on('click', function (params) {
    console.log(dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)]);
    myChart.dispatchAction({
        type: 'dataZoom',
        startValue: dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)],
        endValue: dataAxis[Math.min(params.dataIndex + zoomSize / 2, data.length - 1)]
    });
});;
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
}
 

 /*=====================================
    overflow
 =====================================*/ 
 $('.container-fluid').parent('section').find('.container-fluid').css({
    'padding-right': 0,
    'padding-left': 0,
    'margin-right': 'auto',
    'margin-left': 'auto',
    'overflow-x': 'hidden'
 })  
})(jQuery);