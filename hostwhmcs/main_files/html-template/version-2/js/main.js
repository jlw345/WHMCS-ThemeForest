/*

[Main Script]

Project: HostWHMCS - Responsive Web Hosting and WHMCS Template
Version: 1.0
Author : themelooks.com

*/

;(function ($) {
    "use strict";

    /* ------------------------------------------------------------------------- *
     * COMMON VARIABLES
     * ------------------------------------------------------------------------- */
    var $wn = $(window);
    
    $(document).ready(function () {
        /* ------------------------------------------------------------------------- *
         * BACKGROUND IMAGE
         * ------------------------------------------------------------------------- */
        var $bgImg = $('[data-bg-img]'),
            $bgImgT;
        
        $bgImg.each(function () {
            $bgImgT = $(this);
            $bgImgT.css('background-image', 'url('+ $bgImgT.data('bg-img') +')').removeAttr('data-bg-img').addClass('bg--img');
        });

        /* ------------------------------------------------------------------------- *
         * BUTTON RIPPLE EFFECT
         * ------------------------------------------------------------------------- */
        var $btnRipple = $('.btn--ripple'),
            $btnRippleInk, btnRippleH, btnRippleX, btnRippleY;

        $btnRipple.on('mouseenter', function (e) {
            var $t = $(this);

            if( $t.find(".btn--ripple-ink").length === 0) {
                $t.prepend("<span class='btn--ripple-ink'></span>");
            }
                 
            $btnRippleInk = $t.find(".btn--ripple-ink");
            $btnRippleInk.removeClass("btn--ripple-animate");
             
            if( !$btnRippleInk.height() && !$btnRippleInk.width() ) {
                btnRippleH = Math.max($t.outerWidth(), $t.outerHeight());
                $btnRippleInk.css({height: btnRippleH, width: btnRippleH});
            }
             
            btnRippleX = e.pageX - $t.offset().left - $btnRippleInk.width() / 2;
            btnRippleY = e.pageY - $t.offset().top - $btnRippleInk.height() / 2;
             
            $btnRippleInk.css({top: btnRippleY + 'px', left: btnRippleX + 'px'}).addClass("btn--ripple-animate");
        });
        
        /* -------------------------------------------------------------------------*
         * COUNTER UP
         * -------------------------------------------------------------------------*/
        var $counterUP = $('.CounterUP');
            
        if ( $counterUP.length ) {
            $counterUP.counterUp({
                delay: 10,
                time: 1000
            });
        }
        
        /* ------------------------------------------------------------------------- *
         * FORM VALIDATION
         * ------------------------------------------------------------------------- */
        var $domainSearchForm = $('.domain-search--form form');
        
        if ( $domainSearchForm.length ) {
            $domainSearchForm.validate({
                rules: {
                    domain: "required"
                },
                errorPlacement: function () {
                    return false;
                }
            });
        }

        var $subscribeForm = $('.subscribe--form form');
        
        if ( $subscribeForm.length ) {
            $subscribeForm.validate({
                rules: {
                    EMAIL: {
                        required: true,
                        email: true
                    }
                },
                errorPlacement: function () {
                    return false;
                }
            });
        }

        var $loginForm = $('.login--form form');
        
        if ( $loginForm.length ) {
            $loginForm.validate({
                rules: {
                    loginEmail: {
                        required: true,
                        email: true
                    },
                    loginPassword: "required"
                },
                errorPlacement: function () {
                    return false;
                }
            });
        }

        var $signupForm = $('.signup--form form');
        
        if ( $signupForm.length ) {
            $signupForm.validate({
                rules: {
                    signupFName: "required",
                    signupLName: "required",
                    signupEmail: {
                        required: true,
                        email: true
                    },
                    signupPassword: "required",
                    signupRPassword: {
                        equalTo: "#signupPassword"
                    },
                    signupAgreement: "required"
                },
                errorPlacement: function () {
                    return false;
                }
            });
        }

        var $f0fSearchBar = $('.f0f--search-bar form');
        
        if ( $f0fSearchBar.length ) {
            $f0fSearchBar.validate({
                rules: {
                    searchText: "required"
                },
                errorPlacement: function () {
                    return false;
                }
            });
        }

        var $contactForm = $('.contact--form form'),
            $contactFormStatus = $('.contact--form-status');
        
        if ( $contactForm.length ) {
            $contactForm.validate({
                rules: {
                    contactName: "required",
                    contactEmail: {
                        required: true,
                        email: true
                    },
                    contactSubject: "required",
                    contactMessage: "required"
                },
                errorPlacement: function () {
                    return true;
                },
                submitHandler: function(e) {
                    var $t = $(e);

                    $.ajax({
                        type: 'POST',
                        url: $t.attr('action'),
                        data: $t.serialize(),
                        success: function (res) {
                            $contactFormStatus.show().html(res).delay(1000).fadeOut("slow");
                        }
                    });
                }
            });
        }

        var $blogSearchWidgetForm = $('.blog--search-widget form');
        
        if ( $blogSearchWidgetForm.length ) {
            $blogSearchWidgetForm.validate({
                rules: {
                    searchText: "required"
                },
                errorPlacement: function (error, element) {
                    return false;
                }
            });
        }

        var $blogPostCommentForm = $('.blog--post-comment-form-group form');
        
        if ( $blogPostCommentForm.length ) {
            $blogPostCommentForm.validate({
                rules: {
                    commentText: "required",
                    name: "required",
                    email: {
                        required: true,
                        email: true
                    }
                },
                errorPlacement: function (error, element) {
                    return false;
                }
            });
        }
        
        /* ------------------------------------------------------------------------- *
         * TOGGLE CLASS ON SCROLL
         * ------------------------------------------------------------------------- */
        var tClass = function (pos, $el, value) {
            return $wn.scrollTop() > pos ? $el.addClass(value) : $el.removeClass(value);
        };
        
        /* ------------------------------------------------------------------------- *
         * HEADER STICKY
         * ------------------------------------------------------------------------- */
        var $hEl = $('#header');
        
        tClass(0, $hEl, 'sticky');
        
        /* ------------------------------------------------------------------------- *
         * BACK TO TOP BUTTON SHOW
         * ------------------------------------------------------------------------- */
        var $backToTopBtn = $('#backToTop');
        
        $backToTopBtn.on('click', function () {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            
            return false;
        });

        tClass(0, $backToTopBtn, 'show');
        
        /* ------------------------------------------------------------------------- *
         * SCROLL EVENTS
         * ------------------------------------------------------------------------- */
        $wn.on('scroll', function () {
            /* HEADER STICKY */
            tClass(0, $hEl, 'sticky'); // TOGGLE CLASS ON SCROLL

            /* BACK TO TOP SHOW */
            tClass(0, $backToTopBtn, 'show'); // TOGGLE CLASS ON SCROLL
        });
        
        /* ------------------------------------------------------------------------- *
         * BANNER
         * ------------------------------------------------------------------------- */
        var $banner = $('#banner');

        $banner.css('padding-top', $hEl.children('.header--navbar').height() / 2);

        var $bSlider = $('.BannerSlider');

        if ( $bSlider.length ) {
            $bSlider.bxSlider({
                mode: 'vertical',
                speed: 800,
                auto: true,
                touchEnabled: false,
                controls: false
            });
        }
        
        /* ------------------------------------------------------------------------- *
         * DOMAIN EXTENSION
         * ------------------------------------------------------------------------- */
        var $domainExtSlider = $('.domain-ext--slider');

        if ( $domainExtSlider.length ) {
            $domainExtSlider.owlCarousel({
                items: 6,
                autoPlay: true
            });
        }

        /* ------------------------------------------------------------------------- *
         * FEEDBACK AREA
         * ------------------------------------------------------------------------- */
        var $feedback = $('#feedback');

        if ( $feedback.length ) {
            var $fdNavTab = $('.feedback--nav-tabs'),
                $fdNavTabL = $fdNavTab.find('li'),
                $fdNavTabLW = $fdNavTabL.outerWidth(),
                $fdNavTabAL = $fdNavTab.find('.active'),
                $fdNavTabALW = $fdNavTabAL.outerWidth(),
                $fdTr = $fdNavTab.children('.feedback--triangle'),
                fdP = ($fdNavTabAL.position().left + ($fdNavTabLW / 2)) - 25,
                $fdT;
        
            /* ON LOAD POSITION THE TRIANGLE */
            $fdTr.css('left', fdP);
            
            /* ON CLICK POSITION THE TRIANGLE */
            $fdNavTabL.on('click', function () {
                $fdT = $(this);
                fdP = ($fdT.position().left + ($fdNavTabLW / 2)) - 25;
                
                $fdTr.css('left', fdP);
            });
        }
        
        /* -------------------------------------------------------------------------*
         * CLIENTS SLIDER
         * -------------------------------------------------------------------------*/
        var $clientsSlider = $('.clients--slider');

        if ( $clientsSlider.length ) {
            $clientsSlider.owlCarousel({
                items: 6,
                autoPlay: true
            });
        }
        
        /* -------------------------------------------------------------------------*
         * PRICE DETAILS
         * -------------------------------------------------------------------------*/
        var $priceDetails = $('#priceDetails');

        if ( $priceDetails.length && $wn.width() < 992 ) {
            $('.price-details--item.body li').each(function () {
                var $this = $(this)
                ,   $thisIndx = $this.index()
                ,   $text = $this.parents('.price-details--item').siblings('.price-details--item.head').find('li').eq($thisIndx).text();

                $this.prepend('<span class="labelText">'+ $text +'</span>');
            });
            console.log('Hello World !');
        }

        /* -------------------------------------------------------------------------*
         * PRICE DETAILS 2
         * -------------------------------------------------------------------------*/
        var $priceDetails2 = $('#priceDetails2'),
            $priceDetails2TD = $('.price-details-2--content td');

        if ( $priceDetails2.length && $wn.width() < 992 ) {
            $priceDetails2TD.each(function () {
                var $t = $(this);

                $t.prepend('<span class="labelText">'+ $t.data('label') + '</span>');
            });
        }

        /* -------------------------------------------------------------------------*
         * MAP
         * -------------------------------------------------------------------------*/
        var $map = $('#map');
            
        if ( $map.length ) {
            var myLatLng = {
                    lat: $map.data('latitude'),
                    lng: $map.data('longitude')
                },
                zoomV = $map.data('zoom'),
                map, marker, style;

            style = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];
            
            map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: zoomV,
                scrollwheel: false,
                disableDefaultUI: true,
                zoomControl: true,
                draggable: false,
                styles: style
            });
            
            marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                animation: google.maps.Animation.DROP
            });
        }

        /* -------------------------------------------------------------------------*
         * TWITTER WIDGET
         * -------------------------------------------------------------------------*/
        var $twitterTimeline = $('#twitterTimeline');
        if ( $twitterTimeline.length ) {
            twttr.widgets.createTimeline({
                sourceType: "profile",
                screenName: $twitterTimeline.data('user-name')
            }, document.getElementById('twitterTimeline'));
        }
        
        /* ------------------------------------------------------------------------- *
         * COLOR SWITCHER
         * ------------------------------------------------------------------------- */
        if ( $wn.outerWidth() > 767 ) {
            $.cColorSwitcher({
                'switcherTitle': 'Main Colors:',
                'switcherColors': [{
                    bgColor: '#ff9600',
                    filepath: 'css/colors/theme-color-1.css'
                }, {
                    bgColor: '#8bc34a',
                    filepath: 'css/colors/theme-color-2.css'
                }, {
                    bgColor: '#03a9f4',
                    filepath: 'css/colors/theme-color-3.css'
                }, {
                    bgColor: '#ff4719',
                    filepath: 'css/colors/theme-color-4.css'
                }, {
                    bgColor: '#e91e63',
                    filepath: 'css/colors/theme-color-5.css'
                }, {
                    bgColor: '#00BCD4',
                    filepath: 'css/colors/theme-color-6.css'
                }, {
                    bgColor: '#8CBEB2',
                    filepath: 'css/colors/theme-color-7.css'
                }, {
                    bgColor: '#00B249',
                    filepath: 'css/colors/theme-color-8.css'
                }, {
                    bgColor: '#4267b2',
                    filepath: 'css/colors/theme-color-9.css'
                }, {
                    bgColor: '#e9e9e9',
                    filepath: 'css/colors/theme-color-10.css'
                }],
                'switcherTarget': $('#changeColorScheme')
            });
        }
    });

    $wn.on('load', function () {
        /* -------------------------------------------------------------------------*
         * SUBSCIBE AREA
         * -------------------------------------------------------------------------*/
        var $subscribe = $('#subscribe');

        if ( $subscribe.length ) {
            var sContentH = $subscribe.find('.subscribe--content').outerHeight();

            $subscribe.css('height', sContentH / 2);
        }

        /* -------------------------------------------------------------------------*
         * PRELOADER
         * -------------------------------------------------------------------------*/
        var $preloader = $('#preloader'),
            $bBgAnimate = $('.banner--bg-animate'),
            bBgAnimate = function () {
                $bBgAnimate.animate({
                    'top': 0
                }, 800);
            };

        if ( $preloader.length ) {
            $preloader.fadeOut('slow', bBgAnimate);
        } else {
            bBgAnimate();
        }
    });
})(jQuery);
