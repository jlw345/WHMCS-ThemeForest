"use strict";
var $ = jQuery;

//Animate Start
function animateStart(){
	var activeSection = $('.section.active');

	$('[data-animation]').each(function(){
		var $this     = $(this),
				animation = 'fadeIn',
				delay     = 1;

		if ($this.data('animation')){
			animation = $this.data('animation');
		}

		if ($this.data('animationDelay')){
			delay = $this.data('animationDelay');
		}

		if ($this.closest('.section').hasClass('active')){
			$this.css('animation-delay', delay + 'ms').addClass('animated').addClass(animation);
		}
	});
}

//Animate Finish
function animateFinish(){
	var activeSection = $('.section.active'),
			duration      = 1;

	$('[data-out-animation]').each(function(){
		var $this        = $(this),
				animation    = 'fadeIn',
				outAnimation = 'fadeOut',
				delay        = 1,
				outDelay     = 1;

		if ($this.data('animation')){
			animation = $this.data('animation');
		}

		if ($this.data('outAnimation')){
			outAnimation = $this.data('outAnimation');
		}

		if ($this.data('animationDelay')){
			delay = $this.data('animationDelay');
		}

		if ($this.data('outAnimationDelay')){
			outDelay = $this.data('outAnimationDelay');
		}

		$this.css('animation-delay', delay + 'ms');

		if ($this.closest('.carousel')) {
			var carousel = $this.closest('.carousel'),
					carouselAnimate = 'zoomIn';

			if (carousel.data('carouselAnimation')){
				carouselAnimate = carousel.data('carouselAnimation');
			}

			$this.removeClass(carouselAnimate);
		}

		if ($this.closest('.section').hasClass('active')){
			if (outDelay >= duration) {
				duration = outDelay;
			}

			$this.removeClass(animation).addClass(outAnimation);

			if ($this.data('outAnimationDelay')){
				$this.css('animation-delay', outDelay + 'ms');
			} else {
				$this.css('animation-delay', '1ms');
			}
		} else {
			$this.removeClass(animation).removeClass(outAnimation).removeAttr('style', 'animation-delay');
		}
	});
}
$(document).ready(function(){
	'use strict';
	//Functions(load)
	$(window).on('load', function(){
		animateStart();
		//Preloader
		$('body').delay(500).addClass('loaded').find('.preloader').fadeOut(400);
	});

	//Count Down
	if (($('.countdown').length) && ($.fn.countdown)) {
		var countdown = $('.countdown');

		countdown.each(function (){
			var $this   = $(this),
					austDay = new Date(2016, 1-1, 1);

			if ($this.data('date')){
				var date = $this.data('date').split(' ');

				austDay = new Date(parseFloat(date[0]), parseFloat(date[1]) - 1, parseFloat(date[2]));
			}

			$this.countdown({
				until       : austDay,
				format      : 'DHMS',
				significant : 1,
				description : ' left'
			});
		});
	}
});
