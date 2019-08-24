(function($) {
 "use strict";
 
jQuery(document).ready(function(){

	jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() > 100) {
			jQuery('.scrollup').fadeIn();
		} else {
			jQuery('.scrollup').fadeOut();
		}
	});

	jQuery('.scrollup').click(function(){
		jQuery("html, body").animate({ scrollTop: 0 }, 500);
		return false;
	});

});

})(jQuery);
