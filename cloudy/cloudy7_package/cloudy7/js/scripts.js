document.addEventListener('DOMContentLoaded', function() {
    "use strict";
    
    loadWindowEvents();
    loadMenu();
    loadTabs();
    izotope();
    popup();
    accordion();
    loadSwiper();
    loadTooltips();
    initSliderUI();
    maps();
    loadCountdown();
    misc();
    slick();
    listenSlick();
    loader();
    backtotop();
    owldemo();
    isotope();
    livechat();
    contactform();
    popover();
    scrollgoto();
    autoPlayYouTubeModal();
    active();
    display();
});
/*----------------------*/
/*   FULL NAV OPEN      */
/*----------------------*/
function openNav() {
        document.getElementById('myNav').style.display = 'block';
    }
function closeNav() {
    document.getElementById('myNav').style.display = 'none';
}
/*----------------------*/
/*   Display & Hide     */
/*----------------------*/
function display() {
    $('#showall').on("click", function(){
        $('.targetDiv').show();
    });
    $('.showSingle').on("click", function(){
        $('.targetDiv').hide();
        $('#div'+$(this).attr('target')).show();
    });
}
/*----------------------*/
/*   Active Button      */
/*----------------------*/
function active() {
    $(".heading a").on("click", function(){
        $(".heading a").removeClass("active");
        $(this).addClass("active");
    });
}
/*----------------------*/
/*   Auto Play Modal    */
/*----------------------*/
function autoPlayYouTubeModal() {
  var trigger = $("body").find('[data-toggle="modal"]');
  trigger.on("click", function () {
      var theModal = $(this).data("target"),
          videoSRC = $(this).attr("data-theVideo"),
          videoSRCauto = videoSRC + "?autoplay=1";
      $(theModal + ' iframe').attr('src', videoSRCauto);
      $(theModal + ' button.close').on("click", function () {
          $(theModal + ' iframe').attr('src', videoSRC);
      });
  });
}
/*----------------------*/
/*    Scroll Goto       */
/*----------------------*/
function scrollgoto(){
    $('.golink').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
};
/*----------------------*/
/*       Popover        */
/*----------------------*/
function popover(){
    $('[data-toggle="popover"]').popover()
}
/*----------------------*/
/*    Contact Form      */
/*----------------------*/
function contactform() {
  $('#contactForm').on('submit', function(e) {
    $.ajax({
     type: "POST",
      url:'php/form-process.php',
      data: $(this).serialize(),
      success: function() {
        $('#msgSubmit').fadeIn(100).show();
       }
    });
    e.preventDefault();
  });
};
/*----------------------*/
/*       NAVBAR         */
/*----------------------*/

function nav(){
    document.querySelector( "#nav-toggle" )
      .addEventListener( "click", function() {
        this.classList.toggle( "active" );
    });
} 

/*----------------------*/
/*    Live Chat         */
/*----------------------*/
function livechat(){
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/58127f62c7829d0cd36c88a9/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
}
/*----------------------*/
/*     ISOTOPE          */
/*----------------------*/
function isotope(){
    $(window).on('load', function(){
        var selectedCategory;
        var $grid = $('.featured').isotope({
            itemSelector: '.isotope-item',
            masonry: {
                columnWidth: '.isotope-item',
            },
            getSortData: {
                selectedCategory: function( itemElem ) {
                    return $( itemElem ).hasClass( selectedCategory ) ? 0 : 1;
                }
            }
      });
      var $items = $('.featured').find('.featured-items');
      $('.sort-button-group').on( 'click', '.button', function() {
        selectedCategory = $( this ).attr('data-category');
        if ( selectedCategory === 'all' ) {
            $grid.isotope({
                sortBy: 'original-order'
            });
            $items.css({
                opacity: 1
            });
            return;
        }
        var selectedClass = '.' + selectedCategory;
        $items.filter( selectedClass ).css({
            opacity: 1
        });
        $items.not( selectedClass ).css({
            opacity: 0
        });
        $grid.isotope('updateSortData');
        $grid.isotope({ sortBy: 'selectedCategory' });
      });

      $('.button-group').each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'li', function() {
                $buttonGroup.find('.active').removeClass('active');
                $( this ).addClass('active');
            });
      });

    });
}
/*----------------------*/
/*         OWL          */
/*----------------------*/
function owldemo(){
$('.owl-carousel').owlCarousel({
    onInitialized:theThing, 
    nav:true,
    singleItem:true,
    autoHeight: true,
    dots:false,
    center:true,
    margin:0,
    padding: 0,

    items:1,
     autoPlay : 5500,
     stopOnHover : true,
     center:true,
     navigation:false,
     pagination:false,
     goToFirstSpeed : 1300,
     singleItem : true,
     autoHeight : true,
     responsive: true,
     responsiveRefreshRate : 200,
     responsiveBaseWidth: window,      
     video:true, 

    autoplay:true,
    autoplayTimeout:9000,
    autoplayHoverPause:true,
    navText: [
    "<i class='fa fa-chevron-left'></i>",
    "<i class='fa fa-chevron-right'></i>"
    ],
    responsive:{
        0:{
            items:1
        },
    }
});
function theThing(event){
  $(".active .owl-video-play-icon").trigger("click")
}
}
/*----------------------*/
/*     BACK TO TOP      */
/*----------------------*/
function backtotop(){
    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
        //grab the "back to top" link
        $back_to_top = $('.cd-top');
    //hide or show the "back to top" link
    $(window).scroll(function(){
        ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if( $(this).scrollTop() > offset_opacity ) {
            $back_to_top.addClass('cd-fade-out');
        }
    });
    //smooth scroll to top
    $back_to_top.on('click', function(event){
        event.preventDefault();
        $('body,html').animate({
            scrollTop: 0 ,
            }, scroll_top_duration
        );
    });
}
/*----------------------*/
/*     LOADER           */
/*----------------------*/
function loader() {
    $(window).on('load', function() {
        $("#spinner-area").fadeOut("slow");
    })
}
/*----------------------*/
/*     LISTEN SLICK     */
/*----------------------*/
function listenSlick(){
  $('.slick').on('unslick', function(){
    var resizeCheck = setInterval(function(){
      if ($(window).width() > 590) {
        clearInterval(resizeCheck);
        slick();
      }
    },100);
  });
}
/*----------------------*/
/*     SLICK SLIDER     */
/*----------------------*/
function slick() {
    $('#slider').slick({
      centerMode: true,
      centerPadding: '200px',
      slidesToShow: 3,
      infinite: true,
      arrows: true,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '100px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 991,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '200px',
            slidesToShow: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '150px',
            slidesToShow: 1
          }
        },
        {
          breakpoint: 590,
          settings: "unslick"
        }
      ]
    });
}
/*----------------------*/
/*         POPUP        */
/*----------------------*/
function popup() {
    if ($('.popup-with-form').length) {
        $('.popup-with-form').magnificPopup({
            type: 'image',
            preloader: false,
            focus: '#name',
            closeOnBgClick: true,

            // When elemened is focused, some mobile browsers in some cases zoom in
            // It looks not nice, so we disable it:
            callbacks: {
                beforeOpen: function() {
                    if ($(window).width() < 700) {
                        this.st.focus = false;
                    } else {
                        this.st.focus = '#name';
                    }
                }
            }

        });
    }
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
    });
}
function misc() {
    /*-------------------------*/
    /*   CLOSE ROW TABLE CART  */
    /*-------------------------*/
    $(".wp-close").on("click", function() {
        $(this).parent().parent().remove();
    });
    /*----------------------*/
    /*         MODAL        */
    /*----------------------*/
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').focus()
    })
}
/*----------------------*/
/*        SWIPER        */
/*----------------------*/
var swipers = [];
function loadSwiper() {
    $('.swiper-container').each(function(i) {
        $(this).attr({
            'id': i + '-slider'
        });
    });
    swiperInit();
    $('.slide-prev').on('click', function() {
        swipers['swiper-' + $(this).closest('.slider-wrap').find('.swiper-container').attr('id')].swipePrev();
        return false;
    });
    $('.slide-next').on('click', function() {
        swipers['swiper-' + $(this).closest('.slider-wrap').find('.swiper-container').attr('id')].swipeNext();
        return false;
    });
}
/*-------------------------*/
/*        TOOLTIPS         */
/*-------------------------*/
function loadTooltips() {
    $('#element').tooltip('show')
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
}
function initSliderUI() {
    var initIterator = 0;
    if ($(".slider-ui").length) {
        $(".slider-ui").each(function() {
            var self = $(this),
                sliderUI = self.find('.slider-line'),
                sliderInp = self.find('.slider-inp'),
                sliderUniqueId = 'sliderUI' + initIterator,
                inputUniqueId = 'inputUI' + initIterator,
                start = parseInt(sliderInp.attr('data-start'), 10),
                count_step = parseInt(sliderInp.attr('data-count-step'), 10);
            // console.log(count_step);
            sliderUI.attr('id', sliderUniqueId);
            sliderInp.attr('id', inputUniqueId);
            initIterator++;
            count_step = count_step ? count_step : 300;
            var keypressSlider = document.getElementById(sliderUniqueId),
                input = document.getElementById(inputUniqueId);

            noUiSlider.create(keypressSlider, {
                start: start ? start : 0,
                step: 1,
                connect: "lower",
                format: {
                    to: function(value) {
                        return value;
                    },
                    from: function(value) {
                        return value;
                    }
                },
                tooltips: true,
                format: {
                    to: function(value) {
                        return parseInt(value, 10);
                    },
                    from: function(value) {
                        return value;
                    }
                },
                range: {
                    'min': 1,
                    'max': count_step
                }
            });
            // Calculate Docker Product second and third  diagram
            function getValue2(values, handle, unencoded, tap) {
                // console.log("value of slider2: " + unencoded);

                var circle = $(this.target).closest('.sidebar').find('.circle');
                circle.attr('data-percent', parseInt(unencoded,10) / count_step * 100);

                circle.empty().circliful();

            }
            keypressSlider.noUiSlider.on('change', getValue2);
            keypressSlider.noUiSlider.on('update', function(values, handle) {
                input.value = values[handle];
            });

            input.addEventListener('change', function() {
                keypressSlider.noUiSlider.set([null, this.value]);

            });
            // Listen to keydown events on the input field.
            input.addEventListener('keydown', function(e) {
                // Convert the string to a number.
                var value = Number(keypressSlider.noUiSlider.get()),
                    sliderStep = keypressSlider.noUiSlider.steps()

                // Select the stepping for the first handle.
                sliderStep = sliderStep[0];
                // 13 is enter,
                // 38 is key up,
                // 40 is key down.
                switch (e.which) {
                    case 13:
                        keypressSlider.noUiSlider.set(this.value);
                        break;
                    case 38:
                        keypressSlider.noUiSlider.set(value + sliderStep[1]);
                        break;
                    case 40:
                        keypressSlider.noUiSlider.set(value - sliderStep[0]);
                        break;
                }
            });
        });
    }

}
/*-------------------------*/
/*           MAPS          */
/*-------------------------*/
function maps() {
    if ($('.map').length) {
        $('.map').each(function() {
            initialize(this);
        });
    }
}
function initialize(_this) {
    var stylesArray = {
        //style 1
        'style-1': [{
            "featureType": "all",
            "elementType": "labels.text.fill",
            "stylers": [{
                "saturation": 36
            }, {
                "color": "#333333"
            }, {
                "lightness": 40
            }]
        }, {
            "featureType": "all",
            "elementType": "labels.text.stroke",
            "stylers": [{
                "visibility": "on"
            }, {
                "color": "#ffffff"
            }, {
                "lightness": 16
            }]
        }, {
            "featureType": "all",
            "elementType": "labels.icon",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#fefefe"
            }, {
                "lightness": 20
            }]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [{
                "color": "#fefefe"
            }, {
                "lightness": 17
            }, {
                "weight": 1.2
            }]
        }, {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [{
                "color": "#efeeed"
            }, {
                "lightness": 20
            }]
        }, {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{
                "color": "#f5f5f5"
            }, {
                "lightness": 21
            }]
        }, {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [{
                "color": "#f2f0f1"
            }, {
                "lightness": 21
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 17
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 29
            }, {
                "weight": 0.2
            }]
        }, {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 18
            }]
        }, {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 16
            }]
        }, {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [{
                "color": "#c2b698"
            }, {
                "lightness": 19
            }]
        }, {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{
                "color": "#b7b2a6"
            }, {
                "lightness": 17
            }]
        }]
    };
    var styles, map, marker, infowindow,
        lat = $(_this).attr("data-lat"),
        lng = $(_this).attr("data-lng"),
        contentString = $(_this).attr("data-string"),
        image = $(_this).attr("data-marker"),
        styles_attr = $(_this).attr("data-style"),
        zoomLevel = parseInt($(_this).attr("data-zoom"), 10),
        myLatlng = new google.maps.LatLng(lat, lng);
    // style_1
    if (styles_attr === 'style-1') {
        styles = stylesArray[styles_attr];
    }
    // custom
    if (typeof hawa_style_map !== 'undefined' && styles_attr === 'custom') {
        styles = hawa_style_map;
    }
    // or default style

    var styledMap = new google.maps.StyledMapType(styles, {
        name: "Styled Map"
    });

    var mapOptions = {
        zoom: zoomLevel,
        disableDefaultUI: true,
        center: myLatlng,
        scrollwheel: false,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
        }
    };
    map = new google.maps.Map(_this, mapOptions);
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');
    infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        icon: image
    });
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
    });
    var infowindow = new google.maps.InfoWindow({
        content: "myCloudy"
    });

}
/*-------------------------*/
/*     MENU                */
/*-------------------------*/
function loadMenu() {
    $(".nav-menu .menu-toggle").on("click", function() {
        $(this).closest(".menu-wrap").toggleClass("active");
    });
    $('.btn-scroll').on("click", function() {
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 10
        }, 500);
        return false;
    });
}
/*-------------------------*/
/*          IZOTOPE        */
/*-------------------------*/
function izotope() {
    if ($('.izotope-container').length) {
        var $container = $('.izotope-container');
        $container.isotope({
            itemSelector: '.item',
            layoutMode: 'masonry',
            masonry: {
                columnWidth: '.item'
            }
        });
    }
    $('#filters').on('click', '.but', function() {
        $('.izotope-container').each(function() {
            $(this).find('.item').removeClass('animated');
        });
        $('#filters .but').removeClass('activbut');
        $(this).addClass('activbut');
        var filterValue = $(this).attr('data-filter');
        $container.isotope({
            filter: filterValue
        });
    });
}
/*-------------------------*/
/*            TABS         */
/*-------------------------*/
function loadTabs() {
    $('.tabs-header').on('click', 'li:not(.active)', function() {
        var index_el = $(this).index();
        $(this).addClass('active').siblings().removeClass('active');
        $(this).closest('.tabs').find('.tabs-item').removeClass('active').eq(index_el).addClass('active');
    });
}
/*----------------------*/
/*       ACCORDION      */
/*----------------------*/
function accordion() {
    $('.accordion').on('click', '.panel-title', function() {
        var self = $(this);
        var panelWrap = self.parent();
        panelWrap.find('.panel-collapse').slideToggle('200');
        self.toggleClass('active');
        panelWrap.siblings().find('.panel-collapse').slideUp('200');
        panelWrap.siblings().find('.panel-title').removeClass('active');
    });
    accordHeight();
}
function accordHeight() {
    $(".accordion.faq .square").each(function() {
        $(this).css({
            "height": $(this).parent().outerHeight(true),
            "padding-top": $(this).parent().outerHeight(true) / 2 - 20
        });
    });
}
/*-------------------------*/
/*          SKILLS         */
/*-------------------------*/
function loadSkills() {
    //Circle skills
    $('.circle').not('.animated').each(function() {
        if ($(window).scrollTop() >= $(this).offset().top - $(window).height() * 0.7) {
            $(this).addClass('animated').circliful();
        }
    });
}
/*-------------------------*/
/*           SELECT        */
/*-------------------------*/
function selectInit() {
    $('.selectpicker').each(function() {
        var self = $(this);
        var selectStyle = self.attr('data-class'); //additional style attribute, not required
        self.selectpicker({
            style: 'cst-select ' + selectStyle //add classes to customize select field
        });
    });
}
function loadWindowEvents() {
    /*-------------------------*/
    /*  RUN RESIZE FUNCTIONS   */
    /*-------------------------*/
    $(window).on("resize", function() {
        offheight();
        accordHeight();
    });
    /*-------------------------*/
    /*  RUN SCROLL FUNCTIONS   */
    /*-------------------------*/
    $(window).on("scroll", function() {
        loadSkills();
    });
    $(window).on('scroll', function(){
      if ($(window).scrollTop() >= 150) {
          $('.menu-wrap').addClass('fixed');
      } else {
          $('.menu-wrap').removeClass('fixed');
      }
    });
}
/*-------------------------*/
/*         COUNTDOWN       */
/*-------------------------*/
function loadCountdown() {
    $('#clock').countdown('2019/09/14 00:00', function(event) {
        var $this = $(this).html(event.strftime('' +
            '<span>%w <span class="title">Weeks</span></span>' +
            '<span>%d <span class="title">days</span></span>' +
            '<span>%H <span class="title">hours</span></span>' +
            '<span>%S <span class="title">seconds</span></span>'));
    });
}
function offheight() {
    if ($(window).width() > 750) {
        var offerHeight = $(".offers").outerHeight(true);
        $(".offers.light").css("height", offerHeight + 1);
    }
}

/*----------------------*/
/*       SWIPER         */
/*----------------------*/
function swiperInit() {
    var initIterator = 0;
    var _this,
        spanwipers = $('.swiper-container');
    for (var i = spanwipers.length - 1; i >= 0; i--) {
        _this = spanwipers[i];
        var $th = $(_this);
        var $t = $th;
        var index = $th.attr('id');
        $th.addClass('swiper-' + index + ' initialized').attr('init-attr', 'swiper-' + index);
        $th.find('.pagination').addClass('pagination-' + index);
        var autoPlayVar = parseInt($th.attr('data-autoplay'), 10);
        var slidesPerViewVar = $th.attr('data-slides-per-view');
        var loopVar = parseInt($th.attr('data-loop'), 10);
        var mouseVar = parseInt($th.attr('data-mouse'), 10);
        var sliderSpeed = parseInt($th.attr('data-speed'), 10);
        var touchVar = parseInt($th.attr('data-touch'), 10);
        var mode = $th.attr('data-mode');
        var xsValue, smValue, mdValue, lgValue;
        var slideMode = $th.attr('data-mode');
        var centerVar = parseInt($t.attr('data-center'), 10);
        if (slidesPerViewVar === 'responsive') {
            xsValue = parseInt($th.attr('data-xs-slides'), 10);
            smValue = parseInt($th.attr('data-sm-slides'), 10);
            mdValue = parseInt($th.attr('data-md-slides'), 10);
            lgValue = parseInt($th.attr('data-lg-slides'), 10);
            slidesPerViewVar = updateSlidesPerView(xsValue, smValue, mdValue, lgValue);
        } else slidesPerViewVar = parseInt(slidesPerViewVar, 10);
        swipers['swiper-' + index] = new Swiper('.swiper-' + index, {
            speed: sliderSpeed,
            pagination: '.pagination-' + index,
            loop: loopVar,
            paginationClickable: true,
            autoplay: 5000,
            slidesPerView: slidesPerViewVar,
            keyboardControl: true,
            calculateHeight: true,
            mode: mode || 'horizontal',
            //initialSlide: initialSlideVar,
            //simulateTouch: simVar,
            centeredSlides: centerVar,
            roundLengths: true,
            onSlideChangeEnd: function(swiper) {
                $t.find('.swiper-slide.active').show();
                var activeIndex = (loopVar === true) ? swiper.activeIndex : swiper.activeLoopIndex;
                var qVal = $t.find('.swiper-slide-active').attr('data-val');
                $t.find('.swiper-slide[data-val="' + qVal + '"]').addClass('active');
            },
            onSlideChangeStart: function(swiper) {
                var activeIndex = (loopVar === true) ? swiper.activeIndex : swiper.activeLoopIndex;
                $th.find('.count span i').text(activeIndex + 1);
                $t.find('.swiper-slide.active').removeClass('active');
                $t.find('.swiper-slide.active').hide();

                if ($('.testimonials').length) {

                    $('.wrap-info').css('display', 'none').removeClass('active');
                    $('.wrap-info').eq(activeIndex).css({
                        'display': 'block',
                        'opacity': 0
                    }).animate({
                            'opacity': 1,
                            'transform': 'translateY(0)',
                            'MozTransform': 'translateY(0)',
                            'WebkitTransform': 'translateY(0)'
                        }, 500,
                        function() {
                            $(this).addClass('active');
                        });
                }
            },
            onSlideClick: function(swiper) {}
        });
        swipers['swiper-' + index].reInit();
        if ($t.find('.default-active').length) {
            swipers['swiper-' + $t.attr('id')].swipeTo($t.find('.swiper-slide').index($t.find('.default-active')), 0);
        }
        initIterator++;
        $('.img-person').on('click', function() {
            var $t = $(this);
            if ($t.hasClass('default-active')) return false;
            $t.closest('.testimonials').find('.img-person').removeClass('default-active');
            var index = $t.closest('.testimonials').find('.img-person').index(this);
            swipers['swiper-' + $(this).closest('.swiper-container').attr('id')].swipeTo(index);
        });
    };
    $('.full-height-slider .slide-grid').each(function(i, el) {
        swiper_content[i] = swipers['swiper-' + $(el).find('.swiper-container').attr('id')];
    });
}
function updateSlidesPerView(xsValue, smValue, mdValue, lgValue) {
    var winW = $(window).width();
    var winH = $(window).height();
    var xsPoint = 700,
        smPoint = 991,
        mdPoint = 1199;

    if (winW > mdPoint) return lgValue;
    else if (winW > smPoint) return mdValue;
    else if (winW > xsPoint) return smValue;
    else return xsValue;
}
