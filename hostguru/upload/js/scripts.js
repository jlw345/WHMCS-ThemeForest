$(document).ready(function(){
    "use strict";

    /*-------------------------*/ 
    /*           MENU          */ 
    /*-------------------------*/

    function mainMenu() {
        
        if($(window).width()<750) {
            
            $(".wpc-nav-menu .main-menu > .menu-item-has-children > a").on("click", function(){           
                if($(this).attr('href')!='#') {
                    $(this).next().slideToggle(0);
                    return false;
                } 
            });

        }  
        $(".wpc-nav-menu .menu-toggle").on("click", function(){
            $(this).closest(".wpc-menu-wrap").toggleClass("active");
        });  
    } 

    


    $('.btn-scroll').on("click", function(){
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top-10
        }, 500);
        return false;
    });

    /*-------------------------*/ 
    /*  ADD BACKGROUND IMAGE   */ 
    /*-------------------------*/


    $(".img-bg").each(function(){
        $(this).css("background-image", "url("+$(this).find("img").attr('src')+")");
    });


    /*-------------------------*/ 
    /*   CLOSE ROW TABLE CART  */ 
    /*-------------------------*/

    $(".wp-close").on("click", function() {
        $(this).parent().parent().remove();
    });


    /*-------------------------*/ 
    /*         COUNTDOWN       */ 
    /*-------------------------*/

    if($('#wpc-clock').length) {
        $('#wpc-clock').countdown('2016/04/25', function(event) {
          $(this).html(event.strftime('<div class="container container-responsive"><div class="row"><div class="col-xs-3">%D<span class="divider">:</span><div class="title">days</div></div><div class="col-xs-3">%H<span class="divider">:</span><div class="title">hours</div></div><div class="col-xs-3">%M<span class="divider">:</span><div class="title">minutes</div></div><div class="col-xs-3">%S<span class="divider invisible">:</span><div class="title">seconds</div></div></div></div>'));
         });
    }


    /*-------------------------*/ 
    /*         HEIGHT          */ 
    /*-------------------------*/

    function offheight() {
        if($(window).width()>750) {
            var offerHeight=$(".wpc-offers").outerHeight(true);
            $(".wpc-offers.light").css("height", offerHeight+1); 
        }                 
    }   
    offheight();


    function hostHeight() {
        if($(window).width()>1084) {
           $(".wpc-plans-detail, .h-plans-info").each(function(){
                $(this).css("height", $(this).parent().prev().children().outerHeight(true))
            }); 
        }
        
    }
    hostHeight();



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
            $('.izotope-container').each(function(){
                $(this).find('.item').removeClass('animated');
            });
            
            $('#filters .but').removeClass('activbut');
            
            $(this).addClass('activbut');
            
            var filterValue = $(this).attr('data-filter');
            
            $container.isotope({filter: filterValue});
        });
    }

    izotope();


    /*-------------------------*/ 
    /*            TABS         */ 
    /*-------------------------*/

    $('.tabs-header').on('click', 'li:not(.active)', function() {

        var index_el = $(this).index();

        $(this).addClass('active').siblings().removeClass('active');
        $(this).closest('.tabs').find('.tabs-item').removeClass('active').eq(index_el).addClass('active');

    });


    /*----------------------*/ 
    /*         POPUP        */ 
    /*----------------------*/

   $(document).ready(function() {
    if ($('.popup-with-form').length) {
            $('.popup-with-form').magnificPopup({
                type: 'inline',
                preloader: false,
                focus: '#name',
                closeOnBgClick: true,

                // When elemened is focused, some mobile browsers in some cases zoom in
                // It looks not nice, so we disable it:
                callbacks: {
                    beforeOpen: function() {
                        if($(window).width() < 700) {
                            this.st.focus = false;
                        } else {
                            this.st.focus = '#name';
                        }
                    }
                }
                
            });
        }   
    });


    /*----------------------*/ 
    /*       ACCORDION      */ 
    /*----------------------*/

    $('.wpc-accordion').on('click', '.panel-title', function(){
        var self = $(this);
        var panelWrap = self.parent();
        panelWrap.find('.panel-collapse').slideToggle('200');
        self.toggleClass('active');
        panelWrap.siblings().find('.panel-collapse').slideUp('200');
        panelWrap.siblings().find('.panel-title').removeClass('active');       
    });


    /*----------------------*/ 
    /*        SWIPER        */ 
    /*----------------------*/
    
    $('.swiper-container').each(function(i) {
        $(this).attr({'id' : i + '-slider'});
    });

    var swipers = [];
    var winW = $(window).width();
    var winH  =  $(window).height();
    var xsPoint = 700, smPoint = 991, mdPoint = 1199; 
    var initIterator = 0;
                             
    function swiperInit(){
        var _this,
            spanwipers = $('.swiper-container');

        for (var i = spanwipers.length - 1; i >= 0; i--) {

            _this = spanwipers[i];

            var $th = $(_this);                               
            var $t = $th;
            var index = $th.attr('id'); 
                $th.addClass('swiper-'+index + ' initialized').attr('init-attr', 'swiper-'+index);
                $th.find('.pagination').addClass('pagination-'+index);
            
                var autoPlayVar = parseInt($th.attr('data-autoplay'),10);
                var slidesPerViewVar = $th.attr('data-slides-per-view');
                var loopVar = parseInt($th.attr('data-loop'),10);
                var mouseVar = parseInt($th.attr('data-mouse'),10);
                var sliderSpeed = parseInt($th.attr('data-speed'),10);
                var touchVar = parseInt($th.attr('data-touch'),10);
                var mode = $th.attr('data-mode');
                var xsValue, smValue, mdValue, lgValue;
                var slideMode =  $th.attr('data-mode');
                var centerVar = parseInt($t.attr('data-center'),10);
                if(slidesPerViewVar == 'responsive'){
                    xsValue = parseInt($th.attr('data-xs-slides'),10);
                    smValue = parseInt($th.attr('data-sm-slides'),10);
                    mdValue = parseInt($th.attr('data-md-slides'),10);
                    lgValue = parseInt($th.attr('data-lg-slides'),10);
                    slidesPerViewVar = updateSlidesPerView(xsValue, smValue, mdValue, lgValue);
                } else slidesPerViewVar = parseInt(slidesPerViewVar,10);
                
                swipers['swiper-'+index] = new Swiper('.swiper-'+index,{
                    speed: sliderSpeed,
                    pagination: '.pagination-'+index,
                    loop: loopVar,
                    paginationClickable: true,
                    autoplay: autoPlayVar,
                    slidesPerView: slidesPerViewVar,
                    keyboardControl: true,
                    calculateHeight: true,
                    mode: mode || 'horizontal',
                    //initialSlide: initialSlideVar,
                    //simulateTouch: simVar,
                    centeredSlides: centerVar,
                    roundLengths: true,
                    onSlideChangeEnd: function(swiper){
                        $t.find('.swiper-slide.active').show();
                        var activeIndex = (loopVar===true)?swiper.activeIndex:swiper.activeLoopIndex;
                        var qVal = $t.find('.swiper-slide-active').attr('data-val');
                        $t.find('.swiper-slide[data-val="'+qVal+'"]').addClass('active');
                    },
                    onSlideChangeStart: function(swiper){
                        var activeIndex = (loopVar===true)?swiper.activeIndex:swiper.activeLoopIndex;
                        $th.find('.count span i').text(activeIndex+1);
                        $t.find('.swiper-slide.active').removeClass('active');
                        $t.find('.swiper-slide.active').hide();

                        if($('.wpc-clients-h').length) {

                            $('.wrap-info').css('display', 'none').removeClass('active');
                            $('.wrap-info').eq(activeIndex).css({
                                'display' : 'block',
                                'opacity' : 0
                            }).animate({
                                'opacity' : 1,
                                'transform' : 'translateY(0)',
                                'MozTransform': 'translateY(0)',
                                'WebkitTransform': 'translateY(0)'
                            },500,
                            function() {
                                $(this).addClass('active');
                            });

                        }                   
                    },
                    onSlideClick: function(swiper){
                    }           
                });
  
            swipers['swiper-'+index].reInit();

            if($t.find('.default-active').length){
                swipers['swiper-'+$t.attr('id')].swipeTo($t.find('.swiper-slide').index($t.find('.default-active')), 0);    
            } 

            initIterator++;
            

             $('.img-person').on('click', function () {
                var $t = $(this);
                if($t.hasClass('default-active')) return false;
                $t.closest('.wpc-clients-h').find('.img-person').removeClass('default-active');
                var index = $t.closest('.wpc-clients-h').find('.img-person').index(this);
                swipers['swiper-'+$(this).closest('.swiper-container').attr('id')].swipeTo(index);

            });

        };

        $('.full-height-slider .slide-grid').each(function(i,el) {

            swiper_content[i] = swipers['swiper-'+$(el).find('.swiper-container').attr('id')];

        });


    }


                 
    $('.slide-prev').on('click', function(){
        swipers['swiper-'+$(this).closest('.slider-wrap').find('.swiper-container').attr('id')].swipePrev();

        return false;
    });

    $('.slide-next').on('click', function(){
        swipers['swiper-'+$(this).closest('.slider-wrap').find('.swiper-container').attr('id')].swipeNext();

        return false;
    }); 

    
                         
    function updateSlidesPerView(xsValue, smValue, mdValue, lgValue){
        if(winW > mdPoint) return lgValue;
        else if(winW>smPoint) return mdValue;
        else if(winW>xsPoint) return smValue;
        else return xsValue;
    }   



    $(window).on("load", function(){
        swiperInit();
    });


    /*-------------------------*/ 
    /*          SKILLS         */ 
    /*-------------------------*/


    function circleSkills() {       
        $('.circle').not('.animated').each(function(){
            if($(window).scrollTop() >= $(this).offset().top-$(window).height()*0.7 )  {
                $(this).addClass('animated').circliful();
            }
        });    
    }


    circleSkills();
  

    var skills = function() {
        if ($('.skill-progress-box').length) {

            $('.skill-progress-box').not('.animated').each(function(){

                if($(window).scrollTop() >= $(this).offset().top-$(window).height()*0.7 ) {
                    var $skill_number = $(this).addClass('animated').find('.block-title span[data-skill_percent]');
                    var skill_percent = $skill_number.data('skill_percent');

                    $skill_number.animateNumber({
                        number: skill_percent
                    }, 2000);

                    $(this).find('.progress-bar').each(function(){
                        $(this).css({'width':skill_percent+'%'});
                    });
                }
            });
        }
    }

    skills();


    /*-------------------------*/ 
    /*       FIXED MENU        */ 
    /*-------------------------*/

    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 53) {
            $('.wpc-menu-wrap').addClass('fixed');
        } else {
            $('.wpc-menu-wrap').removeClass('fixed');
        }
    });


    /*-------------------------*/ 
    /*           SELECT        */ 
    /*-------------------------*/

    function selectInit(){
        $('.selectpicker').each(function(){
            var self = $(this);
            var selectStyle = self.attr('data-class');//additional style attribute, not required
            self.selectpicker({
                 style: 'cst-select ' + selectStyle //add classes to customize select field
                });
        });
    }

    /*-------------------------*/ 
    /*           RANGE         */ 
    /*-------------------------*/


    if ($("#wpc-range").length) {
      var slider = document.getElementById('wpc-range');

        noUiSlider.create(slider, {
            start: [20, 60],
            connect: true,
            range: {
                'min': 0,
                'max': 100
            }
        }); 
    }



    function initSliderUI(){

        var initIterator = 0;
        if($(".slider-ui").length){
            $(".slider-ui").each(function(){
                var self = $(this),
                    sliderUI = self.find('.slider-line'),
                    sliderInp = self.find('.slider-inp'),
                    sliderUniqueId = 'sliderUI'+initIterator,
                    inputUniqueId = 'inputUI'+initIterator,
                    start = parseInt(sliderInp.attr('data-start')),
                    count_step = parseInt(sliderInp.attr('data-count-step'));
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
                      to: function ( value ) {
                        return value;
                      },
                      from: function ( value ) {
                        return value;
                      }
                    },
                    tooltips: true,
                    format: {
                      to: function ( value ) {
                        return parseInt(value);
                      },
                      from: function ( value ) {
                        return value;
                      }
                    },
                    range: {
                        'min': 1,
                        'max': count_step
                    }
                });
                ////////////////////////////////
                // Calculate Docker Product second and third  diagram
                function getValue2(values, handle, unencoded, tap) {
                  // console.log("value of slider2: " + unencoded);

                    var circle = $(this.target).closest('.sidebar').find('.circle');
                    circle.attr('data-percent', parseInt(unencoded) / count_step * 100 );
                    
                    circle.empty().circliful();

                }
                keypressSlider.noUiSlider.on('change', getValue2);
                ////////////////////////////////////////////////////////////

                keypressSlider.noUiSlider.on('update', function( values, handle ) {
                    input.value = values[handle];
                });

                input.addEventListener('change', function(){
                    keypressSlider.noUiSlider.set([null, this.value]);

                });

                // Listen to keydown events on the input field.
                input.addEventListener('keydown', function( e ) {

                    // Convert the string to a number.
                    var value = Number( keypressSlider.noUiSlider.get() ),
                        sliderStep = keypressSlider.noUiSlider.steps()

                    // Select the stepping for the first handle.
                    sliderStep = sliderStep[0];

                    // 13 is enter,
                    // 38 is key up,
                    // 40 is key down.
                    switch ( e.which ) {
                        case 13:
                            keypressSlider.noUiSlider.set(this.value);
                            break;
                        case 38:
                            keypressSlider.noUiSlider.set( value + sliderStep[1] );
                            break;
                        case 40:
                            keypressSlider.noUiSlider.set( value - sliderStep[0] );
                            break;
                    }
                });
            });     
        }
        
    }

    


    function accordHeight() {
        $(".wpc-accordion.faq .square").each(function(){
            $(this).css({"height": $(this).parent().outerHeight(true), "padding-top": $(this).parent().outerHeight(true)/2-20});
        });
    }
    accordHeight();

    /*-------------------------*/ 
    /*           MAPS          */ 
    /*-------------------------*/



    if( $('.wpc-map').length ) {
        $('.wpc-map').each(function() {
            initialize(this);
        });
    }

    function initialize(_this) {
        
        var stylesArray = {
            //style 1
            'style-1' : [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#efeeed"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#f2f0f1"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#c2b698"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#b7b2a6"},{"lightness":17}]}]
        };

        var styles ,map, marker, infowindow,
            lat = $(_this).attr("data-lat"),
            lng = $(_this).attr("data-lng"),
            contentString = $(_this).attr("data-string"),
            image = $(_this).attr("data-marker"),
            styles_attr = $(_this).attr("data-style"),
            zoomLevel = parseInt($(_this).attr("data-zoom"),10),
            myLatlng = new google.maps.LatLng(lat,lng);
            

        // style_1
        if (styles_attr == 'style-1') {
            styles = stylesArray[styles_attr];
        }
        // custom
        if (typeof hawa_style_map != 'undefined' && styles_attr == 'custom') {
            styles = hawa_style_map;
        }
        // or default style
        
        var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});
        
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
            infowindow.open(map,marker);
        });

    }





    









    /*-------------------------*/ 
    /*  RUN RESIZE FUNCTIONS   */ 
    /*-------------------------*/

    $(window).on("resize", function(){
        offheight();
        accordHeight();
    });



    /*-------------------------*/ 
    /*  RUN SCROLL FUNCTIONS   */ 
    /*-------------------------*/

    $(window).on("scroll", function(){
        circleSkills();
        skills();
    });


    /*-------------------------*/ 
    /*    RUN LOAD FUNCTIONS   */ 
    /*-------------------------*/

    $(window).on("load", function(){
        offheight();
        izotope();
        skills();
        initSliderUI();
        accordHeight();
        mainMenu();
    });


});


