(function($) {
"use strict";

/* ==============================================
ANIMATION -->
=============================================== */

    new WOW({
	    boxClass:     'wow',      // default
	    animateClass: 'animated', // default
	    offset:       0,          // default
	    mobile:       true,       // default
	    live:         true        // default
    }).init();

/* ==============================================
LIGHTBOX -->
=============================================== */   

  jQuery('a[data-gal]').each(function() {
    jQuery(this).attr('rel', jQuery(this).data('gal')); });     
    jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_square',slideshow:true,overlay_gallery: true,social_tools:false,deeplinking:false});


/* ==============================================
SCROLL -->
=============================================== */

$(function() {
  $('a[href*=#]:not([href=#])').click(function(item) {
	jQuery(".navbar-inverse .navbar-nav > li > a").removeClass("active");
	jQuery(".dropdown").removeClass("open");
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		console.log(location);
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
		
		location.href = location.pathname + jQuery(item.target).attr('href');
		
		
		jQuery(item.target).parents( ".dropdown-menu").siblings(".dropdown-toggle").addClass("active");
		jQuery(item.target).addClass("active");
        return false;
      }
    }
  });
});

/* ==============================================
VIDEO FIX -->
=============================================== */

    $(document).ready(function(){
      // Target your .container, .wrapper, .post, etc.
      $(".media").fitVids();
    });

	var sections = $('.row')
	  , nav = jQuery('#navbar')
	  , nav_height = nav.outerHeight();
	 
	jQuery(window).on('scroll', function () {
	  var cur_pos = jQuery(this).scrollTop();
	 
	  sections.each(function() {
		var top = jQuery(this).offset().top - nav_height,
			bottom = top + jQuery(this).outerHeight();
	 
		if (cur_pos >= top && cur_pos <= bottom) {
			nav.find('a').removeClass('active');
			sections.removeClass('active');

			jQuery(this).addClass('active');
			nav.find('a[href="#'+jQuery(this).attr('id')+'"]').addClass('active').parents( ".dropdown-menu").siblings(".dropdown-toggle").addClass("active");
		}
	  });
	});
	
})(jQuery);