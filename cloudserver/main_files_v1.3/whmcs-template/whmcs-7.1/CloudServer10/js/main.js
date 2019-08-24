/*

[Main Script]

Project: CloudServer - Responsive HTML5 Technology, Web Hosting and WHMCS Template
Version: 1.3
Author : themelooks.com

*/

(function ($) {
    "use strict";
    
    /* ------------------------------------------------------------------------- *
     * COMMON VARIABLES
     * ------------------------------------------------------------------------- */
    var $wn = $(window),
        $body = $('body');

    /* ------------------------------------------------------------------------- *
     * FAKELOADER
     * ------------------------------------------------------------------------- */
    var $fakeLoader = $('#fakeLoader');

    $fakeLoader.fakeLoader({ spinner: "spinner2", zIndex: '99999' });

    $(function () {
        /* ------------------------------------------------------------------------- *
         * BACKGROUND IMAGE
         * ------------------------------------------------------------------------- */
        var $bgImg = $('[data-bg-img]');
        
        $bgImg.each(function () {
            var $t = $(this);

            $t.css('background-image', 'url(' + $t.data('bg-img') + ')').addClass('bg--img').removeAttr('data-bg-img');
        });
        
        /* ------------------------------------------------------------------------- *
         * BACKGROUND VIDEO
         * ------------------------------------------------------------------------- */
        var $bgVideo = $('[data-bg-video]');
        
        if ( $bgVideo.length ) {
            $bgVideo.tubular({videoId: $bgVideo.data('bg-video'), wrapperZIndex: 0});
        }
        
        /* ------------------------------------------------------------------------- *
         * STICKYJS
         * ------------------------------------------------------------------------- */
        var $sticky = $('[data-sticky="true"]');
        
        if ( $sticky.length ) {
            $sticky.sticky({
                zIndex: '999'
            });
        }
        
        /* -------------------------------------------------------------------------*
         * MENU
         * -------------------------------------------------------------------------*/
        var $menu = $('#menu'),
            $offCanvasMenu = $('.off-canvas-menu'),
            $offCanvasMenuLinks = $('.off-canvas-menu .nav > li > a');
        
        $menu.on('click', '.menu-toggle-btn, .off-canvas-menu--close-btn, .off-canvas-menu-overlay', function (e) {
            e.preventDefault();
            
            $offCanvasMenu.toggleClass('menu-open');
        });
        
        $offCanvasMenuLinks.one('click', function () {
            var $parent = $(this).parent('li');
            
            if ( $parent.hasClass('opened') ) {
                $parent.toggleClass('opened open');
            } else {
                $parent.siblings('li.opened').toggleClass('opened open');
            }
        });
        
        /* -------------------------------------------------------------------------*
         * FORM VALIDATION
         * -------------------------------------------------------------------------*/
        var $formValidation = $('[data-form-validation="true"] form');
        
        $formValidation.each(function () {
            var $t = $(this);
            
            $t.validate({
                errorPlacement: function (error, element) {
                    return true;
                }
            });
        });
        
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
        
        /* -------------------------------------------------------------------------*
         * OWL CAROUSEL
         * -------------------------------------------------------------------------*/
        var bannerSlider = $('.banner-slider'),
            bannerSliderNav = $('.banner--slider-nav'),
            bannerSliderPagination = typeof bannerSlider.data('pagination') === 'undefined' ? false : bannerSlider.data('pagination');
        
        if ( bannerSlider.length ) {
            bannerSlider.owlCarousel({
                slideSpeed: 800,
                paginationSpeed: 800,
                singleItem: true,
                autoPlay: true,
                addClassActive : true,
                pagination: bannerSliderPagination,
                nav: false,
                afterInit: function () {
                    $(this.$userItems).css( 'height', $(this.$owlWrapper).outerHeight() + bannerSliderNav.outerHeight() );
                    $(this.$userItems).css( 'padding-bottom', bannerSliderNav.outerHeight() + 80 );
                    
                    bannerSliderNav.on('click', 'li', function () {
                        bannerSlider.trigger( 'owl.goTo', $(this).index() );
                    });
                },
                afterMove: function () {
                    bannerSliderNav.find('li').eq( this.currentItem ).addClass('active').siblings('li').removeClass('active');
                }
            });
        }
        
        var testimonialSlider = $('.testimonial-slider');
            
        if ( testimonialSlider.length ) {
            testimonialSlider.owlCarousel({
                slideSpeed: 700,
                paginationSpeed: 700,
                singleItem: true,
                autoPlay: true,
                addClassActive: true
            });
        }
        
        var $pricingSlider = $('.pricing--slider');

        if ( $pricingSlider.length ) {
            $pricingSlider.owlCarousel({
                slideSpeed: 800,
                paginationSpeed: 800,
                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [991, 2],
                itemsTablet: [767, 1]
            });
        }

        /* ------------------------------------------------------------------------- *
         * VPS PRICING AREA
         * ------------------------------------------------------------------------- */
        var $vpsPricing = $('#vpsPricing'),
            vpsPricingObj = {};
        
        vpsPricingObj.$slider = $vpsPricing.find('#vpsSlider');
        vpsPricingObj.$putValue = $vpsPricing.find('[data-put-value]');
            
        vpsPricingObj.slider = function (res) {
            vpsPricingObj.slider.value = 1;
            vpsPricingObj.slider.max = res.length - 1;
            
            vpsPricingObj.slider.changeValue = function (e, ui) {
                vpsPricingObj.slider.value = $.isEmptyObject( ui ) ? vpsPricingObj.slider.value : ui.value;
                
                vpsPricingObj.$slider.find('.ui-slider-handle').html( '<em>' + res[ vpsPricingObj.slider.value ].title + '</em>' );
                
                vpsPricingObj.$putValue.each(function () {
                    var $t = $(this);
                    
                    $t.text( res[ vpsPricingObj.slider.value ][ $t.data('put-value') ] );
                });
            };
            
            vpsPricingObj.$slider.slider({
                animate: 'fast',
                range: 'min',
                min: 0,
                max: vpsPricingObj.slider.max,
                value: vpsPricingObj.slider.value,
                step: 1,
                create: vpsPricingObj.slider.changeValue,
                slide: vpsPricingObj.slider.changeValue
            });
        };
        
        if ( $vpsPricing.length ) {
            $.getJSON('json/vps-plans.json', vpsPricingObj.slider)
                .done(function () {
                    vpsPricingObj.$items = $vpsPricing.find('.vps-pricing--items');
                    vpsPricingObj.$tag = $vpsPricing.find('.vps-pricing--tag');
                    
                    vpsPricingObj.$tag.css( 'height', vpsPricingObj.$items.height() );
                    
                    $wn.on('resize', function () {
                        vpsPricingObj.$tag.css( 'height', vpsPricingObj.$items.height() ); 
                    });
                });
        }
        
        /* -------------------------------------------------------------------------*
         * COUNTER UP
         * -------------------------------------------------------------------------*/
        var $counterUp = $('[data-counter-up="true"]');
            
        if ( $counterUp.length ) {
            $counterUp.counterUp({
                delay: 10,
                time: 1000
            });
        }
        
        /* -------------------------------------------------------------------------*
         * COUNTDOWN
         * -------------------------------------------------------------------------*/
        var $countDown = $('[data-counter-down]');
            
        $countDown.each(function () {
            var $t = $(this);
            
            $t.countdown($t.data('counter-down'), function(e) {
                $(this).html( e.strftime('%D Days %H:%M:%S') );
            });
        });
        
        /* -------------------------------------------------------------------------*
         * ANIMATESCROLL
         * -------------------------------------------------------------------------*/
        var $animateScrollLink = $('[data-animate-scroll="true"]'),
            animateScrolling = function (e) {
                e.preventDefault();
                
                var targetEl = $(this).attr('href'),
                    offset = typeof $(this).data('offset') === 'undefined' ? 0 : $(this).data('offset');
                
                $(targetEl).animatescroll({
                    padding: 65,
                    easing: 'easeInOutExpo',
                    scrollSpeed: 2000
                });
            };
        
        $animateScrollLink.on('click', animateScrolling);
        
        /* -------------------------------------------------------------------------*
         * GALLERY AREA
         * -------------------------------------------------------------------------*/
        var $galleryItems = $('.gallery--items'),
            galleryItem = '.gallery--item',
            $galleryFilter = $('.gallery--filter-menu');
        
        if ( $galleryItems.length ) {
            $galleryItems.isotope({
                animationEngine: 'best-available',
                itemSelector: galleryItem
            });
            
            $galleryFilter.on('click', 'a', function () {
                var $t = $(this),
                    f = $t.attr('href'),
                    s = (f !== '*') ? '[data-cat~="'+ f +'"]' : f;
                
                $galleryItems.isotope({
                    filter: s
                });
                
                $t.parent('li').addClass('active').siblings().removeClass('active');
                
                return false;
            });
        
            $galleryItems.magnificPopup({
                delegate: '.gallery--img a',
                type:'image',
                gallery: {
                    enabled: true,
                    navigateByImgClick: false
                },
                zoom: {
                    enabled: true
                },
                callbacks: {
                    open: function () {
                        this.currItem.el.addClass('active');
                    },
                    close: function () {
                        this.currItem.el.removeClass('active');
                    }
                }
            });
        }
        
        /* -------------------------------------------------------------------------*
         * MAP
         * -------------------------------------------------------------------------*/
        var $map = $('#map'),
            setMap = function () {
                var map = new google.maps.Map($map[0], {
                    center: {lat: $map.data('map-latitude'), lng: $map.data('map-longitude')}, // {lat: 23.790546, lng: 90.375583}
                    zoom: $map.data('map-zoom'), // 16
                    scrollwheel: false,
                    disableDefaultUI: true,
                    zoomControl: true
                });
                
                if ( typeof $map.data('map-marker') !== 'undefined' ) {
                    var data = $map.data('map-marker'),
                        i = 0;

                    for ( i; i < data.length; i++ ) {
                       new google.maps.Marker({
                           position: {lat: data[i][0], lng: data[i][1]},
                           map: map,
                           animation: google.maps.Animation.DROP,
                           draggable: true
                       });
                    }
                }
            };
        
        if ( $map.length ) {
            setMap();
        }
        
        /* -------------------------------------------------------------------------*
         * PRICING TABLE AREA
         * -------------------------------------------------------------------------*/
        var $hasPricingHead = $('[data-has-pricing-head="no"]'),
            adjustNoPricingHead = function () {
                $hasPricingHead.children('.pricing--content').css('margin-top', $hasPricingHead.siblings().find('.pt-head').outerHeight() );
            };

        if ( $hasPricingHead.length ) {
            adjustNoPricingHead();
            $wn.on('resize', adjustNoPricingHead);
        }
        
        /* -------------------------------------------------------------------------*
         * DOMAIN PRICING AREA
         * -------------------------------------------------------------------------*/
        var $domainPricing = $('#domainPricing'),
            $dedicatedPricing = $('#dedicatedPricing');
        
        $domainPricing.add($dedicatedPricing).find('table td').each(function () {
            var $t = $(this);
            $t.prepend('<span class="labelText">'+ $t.data('label') + '</span>');
        });
        
        /* -------------------------------
            LIVE CHAT WIDGET
        ------------------------------- */
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date(),
            $tawk = document.createElement("script");
            
        $tawk.async=true;
        $tawk.src='https://embed.tawk.to/57dfd4b85dc7a25e92808cf6/default';
        $tawk.charset='UTF-8';
        $tawk.setAttribute('crossorigin','*');
        
        $($tawk).appendTo('body');
        
        /* -------------------------------------------------------------------------*
         * COLOR SWITCHER
         * -------------------------------------------------------------------------*/
        if ( typeof $.cColorSwitcher !== "undefined" && $wn.outerWidth() > 767 ) {
            $.cColorSwitcher({
                'switcherTitle': 'Main Colors:',
                'switcherColors': [{
                    bgColor: '#288feb',
                    filepath: 'css/colors/theme-color-1.css'
                }, {
                    bgColor: '#8bc34a',
                    filepath: 'css/colors/theme-color-2.css'
                }, {
                    bgColor: '#03a9f4',
                    filepath: 'css/colors/theme-color-3.css'
                }, {
                    bgColor: '#ff5252',
                    filepath: 'css/colors/theme-color-4.css'
                }, {
                    bgColor: '#ff9600',
                    filepath: 'css/colors/theme-color-5.css'
                }, {
                    bgColor: '#e91e63',
                    filepath: 'css/colors/theme-color-6.css'
                }, {
                    bgColor: '#00BCD4',
                    filepath: 'css/colors/theme-color-7.css'
                }, {
                    bgColor: '#FC5143',
                    filepath: 'css/colors/theme-color-8.css'
                }, {
                    bgColor: '#00B249',
                    filepath: 'css/colors/theme-color-9.css'
                }, {
                    bgColor: '#D48B91',
                    filepath: 'css/colors/theme-color-10.css'
                }],
                'switcherTarget': $('#changeColorScheme')
            });
        }
        
        /* -------------------------------------------------------------------------*
         * HEADER TOPBAR NOTIFICATION
         * -------------------------------------------------------------------------*/
        var $header = $('#header');
        
        $header.on('click', '[data-toggle="popover"]', function (e) {
            e.preventDefault();
        });
    });
})(jQuery);
