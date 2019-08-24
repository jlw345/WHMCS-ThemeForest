// MAIN.JS
//--------------------------------------------------------------------------------------------------------------------------------
//This is main JS file that contains custom JS scipts and initialization used in this template*/
// -------------------------------------------------------------------------------------------------------------------------------
// Template Name: 3Host | Responsive Landing Page for a Technology and Hosting Company
// Author: Iwthemes
// Version 1.0
// Website: http://www.iwthemes.com 
// Email: support@iwthemes.com
// Copyright: (C) 2016
// -------------------------------------------------------------------------------------------------------------------------------

$(document).ready(function(){

   "use strict";
    
  // Loader ------------------------------------------//
  jQuery(window).load(function() {
    jQuery(".status").fadeOut();
    jQuery(".preloader").delay(500).fadeOut("slow");
  })

  // Smooth Scroll -------------------------------------//
  smoothScroll.init();
    
 
  // Animations ------------------------------------//
  new WOW().init();

  // Carousels --------------------------------------//
  $('.carousel-installations').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 5500,
      animateOut: 'fadeOut',
      responsive:{
          0:{
              items:1
          }
      }
  })

  $('.carousel-panel').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 5500,
      animateOut: 'fadeOut',
      responsive:{
          0:{
              items:1
          }
      }
  })

  // Contact Form ----------------------------------//
    $('.form-contact').submit(function(event) {  
      event.preventDefault();  
      var url = $(this).attr('action');  
      var datos = $(this).serialize();  
      $.get(url, datos, function(resultado) {  
        $('.result').html(resultado);  
      });  
    }); 

  // Lightbox --------------------------------------//
    $(".iframe_video").fancybox({
      'width'       : '65%',
      'height'      : '75%',
      'autoScale'   : false,
      'transitionIn': 'none',
      'transitionOut': 'none',
      'type'        : 'iframe'
    }); 
    jQuery("a[class*=fancybox]").fancybox({
    'overlayOpacity'  :  0.7,
    'overlayColor'    : '#000000',
    'transitionIn'    : 'elastic',
    'transitionOut'   : 'elastic',
    'easingIn'        : 'easeOutBack',
    'easingOut'       : 'easeInBack',
    'speedIn'         : '700',
    'centerOnScroll'  : true,
    'titlePosition'     : 'over'
  });

  // Popover & Tooltip -------------------------------//
  $('[data-toggle="tooltip"]').tooltip() 
});  

$('.dropdown-toggle').dropdown()