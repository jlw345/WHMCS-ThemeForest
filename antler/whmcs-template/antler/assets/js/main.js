/* *****************************************************

[Main Javascript]
Project: Antler - Hosting Provider & WHMCS Template
Version: 1.0
Author : inebur.com

***************************************************** */
document.addEventListener('DOMContentLoaded', function() {
    "use strict";
    
    owldemo();
    loadWindowSettings();
    loadWindowEvents();
    loadMenu();
    loadTabs();
    accordion();
    loadTooltips();
    initSliderUI();
    nav();
    svg();
});
//----------------------------------------------------/
// SVG Change color style 
//----------------------------------------------------/
function svg() {
  $("img.svg").each(function () {
    var $img = jQuery(this);
    var attributes = $img.prop("attributes");
    var imgURL = $img.attr("src");
    $.get(imgURL, function (data) {
      var $svg = $(data).find('svg');
      $svg = $svg.removeAttr('xmlns:a');
      $.each(attributes, function() {
        $svg.attr(this.name, this.value);
      });
      $img.replaceWith($svg);
    });
  });
}
//----------------------------------------------------/
// Styleswitch color style 
//----------------------------------------------------/
(function($) {
    $(document).ready(function() {
        $(".styleswitch").click(function() {
            switchStylestyle(this.getAttribute("data-rel"));
            return false
        });
    });

    function switchStylestyle(styleName) {
        $("link[rel*=style][title]").each(function(i) {
            this.disabled = true;
            if (this.getAttribute("title") == styleName) this.disabled = false
        })
    }
})(jQuery);
/*----------------------*/
/*  Typed Animation     */
/*----------------------*/
$(function(){
    $("#typed3").typed({
      strings: ["Premium hardware.", "Large performance.", "Fully dedicated."],
      typeSpeed: 50,
      backSpeed: 20,
      smartBackspace: true,
      loop: true
    });
});
/*----------------------*/
/*       navbar         */
/*----------------------*/
function nav(){
    document.querySelector( "#nav-toggle" )
      .addEventListener( "click", function() {
        this.classList.toggle( "active" );
    });
} 
/*-------------------------*/
/*        Tooltips         */
/*-------------------------*/
function loadTooltips() {
    $('#element').tooltip('show')
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
}
/*-------------------------*/
/*          Slider         */
/*-------------------------*/
function initSliderUI() {
    var initIterator = 0;
    if ($(".slider-ui").length) {
        $(".slider-ui").each(function() {
            var self = $(this),
                sliderUI = self.find('.slider-line'),
                sliderInp = self.find('.slider-inp'),
                sliderUniqueId = 'sliderUI' + initIterator,
                inputUniqueId = 'inputUI' + initIterator,
                start = parseInt(sliderInp.attr('data-start')),
                count_step = parseInt(sliderInp.attr('data-count-step'));
            sliderUI.attr('id', sliderUniqueId);
            sliderInp.attr('id', inputUniqueId);
            initIterator++;
            count_step = count_step ? count_step : 300;
            var keypressSlider = document.getElementById(sliderUniqueId),
                input = document.getElementById(inputUniqueId);
            noUiSlider.create(keypressSlider, {
                start: start ? start : 2,
                step: 1,
                connect: "lower",
                tooltips: true,
                format: {
                    to: function(value) {
                        return "VPS" + value;
                        //return parseInt(value);
                    },
                    from: function(value) {
                        return value;
                    }
                },
                range: {
                    'min': 1,
                    'max': count_step
                },
                pips: {
                    mode: 'values',
                    values: [1, 2, 3, 4, 5],
                    density: 5,
                    stepped: true
                }
            });

            // Calculate Docker Product second and third  diagram
            function getValue2(values, handle, unencoded, tap) {
                var circle = $(this.target).closest('.sidebar').find('.circle');
                circle.attr('data-percent', parseInt(unencoded) / count_step * 100);
            }
            keypressSlider.noUiSlider.on('change', getValue2);
            keypressSlider.noUiSlider.on('update', function(values, handle) {
                refreshInfo(values[handle]);
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
            function getServicesInfo() {
              var info = {
                "VPS1": {
                  "name": "Service A",
                  "disk": "100GB",
                  "ram": "1GB",
                  "cpu": "1 Core",
                  "bandwith": "100GB",
                  "setup": "8€",
                  "ip": "2 IPs",
                  "price": "99.09",
                  "priceon": "8.26"
                },
                "VPS2": {
                  "name": "Service B",
                  "disk": "200GB",
                  "ram": "4GB",
                  "cpu": "2 Core",
                  "setup": "15€",
                  "ip": "4 IPs",
                  "bandwith": "500GB",
                  "price": "155.00",
                  "priceon": "12.92"
                },
                "VPS3": {
                  "name": "Service C",
                  "disk": "300GB",
                  "ram": "8GB",
                  "cpu": "4 Core",
                  "setup": "Free",
                  "ip": "8 IPs",
                  "bandwith": "2TB",
                  "price": "299.99",
                  "priceon": "25.00"
                },
                "VPS4": {
                  "name": "Service D",
                  "disk": "400GB",
                  "ram": "12GB",
                  "cpu": "4 Core",
                  "setup": "Free",
                  "ip": "8 IPs",
                  "bandwith": "Unlimited",
                  "price": "395.22",
                  "priceon": "32.94"
                },
                "VPS5": {
                  "name": "Service E",
                  "disk": "500GB",
                  "ram": "16GB",
                  "cpu": "8 Core",
                  "setup": "Free",
                  "ip": "12 IPs",
                  "bandwith": "Unlimited",
                  "price": "545.00",
                  "priceon": "45.42"
                }
              };
              return info;
            }
            function refreshInfo(key){
              var info = getServicesInfo();
              $("#disk-val").html(info[key].disk);
              $("#cpu-val").html(info[key].cpu);
              $("#ram-val").html(info[key].ram);
              $("#setup-val").html(info[key].setup);
              $("#ip-val").html(info[key].ip);
              $("#bw-val").html(info[key].bandwith);
              $("#price-val").html(info[key].price);
              $("#priceon-val").html(info[key].priceon);
            }
        });
    }
}
/*-------------------------*/
/*          Menu           */
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
/*          Tabs           */
/*-------------------------*/
function loadTabs() {
    $('.tabs-header').on('click', 'li:not(.active)', function() {
        var index_el = $(this).index();
        $(this).addClass('active').siblings().removeClass('active');
        $(this).closest('.tabs').find('.tabs-item').removeClass('active').eq(index_el).addClass('active');
    });
}
/*----------------------*/
/*       Accordion      */
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
/*          Skills         */
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
/*           Select        */
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
    /*  Run Resize Functions   */
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
    /*-------------------------*/
    /*  RUN SCROLL FUNCTIONS   */
    /*-------------------------*/
    $(window).on('scroll', function(){
      if ($(window).scrollTop() >= 100) {
          $('.menu-wrap').addClass('fixed');
      } else {
          $('.menu-wrap').removeClass('fixed');
      }
    });
}
function offheight() {
    if ($(window).width() > 750) {
        var offerHeight = $(".offers").outerHeight(true);
        $(".offers.light").css("height", offerHeight + 1);
    }
}
/*-------------------------*/
/*       Fixed Menu        */
/*-------------------------*/
function loadWindowSettings() {
    offheight();
    if ($(window).width() < 750) {
        $(".nav-menu .main-menu > .menu-item-has-children > a").on("click", function() {
            if ($(this).attr('href') !== '#') {
                $(this).next().slideToggle(0);
                return false;
            }
        });
    }
}
/*----------------------*/
/*         OWL          */
/*----------------------*/
function owldemo(){
$('.owl-carousel').owlCarousel({
    onInitialized:theThing, 
    nav:false,
    singleItem:true,
    autoHeight: true,
    dots:true,
    center:true,
    margin:0,
    padding: 0,
    animateOut: 'fadeOut',

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