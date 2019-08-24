var $ = jQuery.noConflict();

$(document).ready(function($){
	"use strict";

	//Portfolio images slides
	if($('.otw_portfolio_manager-format-gallery .slides').length > 0 ) {
		$('.otw_portfolio_manager-format-gallery').flexslider({
			animation: "slide" // slide or fade
		});
	}

	/* Fancybox Images */
	try {
		$(".otw_portfolio_manager-fancybox-img").fancybox({
			nextEffect	: 'fade',
			prevEffect	: 'fade',
			openEffect	: 'fade',
			closeEffect	: 'fade',
				helpers: {
				title : {
					type : 'float'
				}
			}
		});
	} catch(err) { }

	/* Fancybox Videos */
	try {
		$('.otw_portfolio_manager-fancybox-video').fancybox({
			maxWidth	: 800,
			maxHeight	: 600,
			fitToView	: false,
			width		: '75%',
			height		: '75%',
			type		: 'iframe',
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'fade',
			closeEffect	: 'fade'
		});
	} catch(err) { }

	//Load More
	$('.otw_portfolio_manager-load-more a').on("click", function(e){
		e.preventDefault();

		var $this = $(this),
			$parent = $(this).parent('.otw_portfolio_manager-load-more'),
			url = $parent.parent().find('.otw_portfolio_manager-pagination.hide a').attr('href');

		if(url === 'undefined' || url === '#' || url === ''){
			$this.text($this.attr('data-empty'));
			return false;
		}

		$container = $parent.parent().find('.otw_portfolio_manager-portfolio-newspaper');
		
		$.get(url, function(data) {
			if($this.data('layout') === 'grid'){
				var $newElements = $( $(data).find('.otw_portfolio_manager-grid-layout-wrapper').html() );
			} else {
				var $newElements = $( $(data).find('.otw_portfolio_manager-portfolio-items-holder').html() );
			}

			//slider fixing
			$newElements.find('.otw_portfolio_manager-portfolio-media.otw_portfolio_manager-format-gallery').each(function(){
				var image = new Image();
				image.src = $(this).find('.slides li img').attr("src");
				$(this).css({'max-width': image.naturalWidth + 'px' });
				$(this).find('.slides li').css({'max-width': image.naturalWidth + 'px' });
			});

			if($newElements.find('.otw_portfolio_manager-format-gallery .slides').length > 0 ) {
				$newElements.find('.otw_portfolio_manager-format-gallery').flexslider({
					animation: "slide"
				});
			}

			if($this.data('isotope') !== false){
				$container.append( $newElements ).isotope( 'appended', $newElements, function(){
					if($this.data('layout') === 'mosaic'){
						otw_calculate_columns('.otw_portfolio_manager-mosaic-layout');
					}

					$(this).isotope('reLayout');
				});
			} else {
				if($this.data('layout') === 'horizontal'){
					$newElements.appendTo( $parent.parent().find('.otw_portfolio_manager-portfolio-items-holder') ).each(function(){
						otw_portfolio_horizontal_layout('.otw_portfolio_manager-horizontal-layout-items');
					});
				} else if($this.data('layout') === 'grid'){
					$newElements.appendTo( $parent.parent().find('.otw_portfolio_manager-grid-layout-wrapper') );
				}
			}

			otw_hover_effects();
			otw_social_shares();

			//next page
			if($(data).find('.otw_portfolio_manager-pagination.hide').length !== 0){
				$parent.parent().find('.otw_portfolio_manager-pagination.hide').html( $(data).find('.otw_portfolio_manager-pagination.hide').html() );
			} else {
				$parent.parent().find('.otw_portfolio_manager-pagination.hide a').attr({'href': '#'});
			}
		});
	});

	//Infinite Scroll for Grid Layout
	try {
		$('.otw_portfolio_manager-grid-layout-infinite-scroll').infinitescroll({
			navSelector  : '.otw_portfolio_manager-pagination',    // selector for the paged navigation 
			nextSelector : '.otw_portfolio_manager-pagination a',  // selector for the NEXT link (to page 2)
			itemSelector : '.otw_portfolio_manager-portfolio-items-holder',     // selector for all items you'll retrieve
			loading: {
					finishedMsg: 'No more pages to load.',
					img: 'http://i.imgur.com/qkKy8.gif'
				}
			},

			//call horizontal layout as a callback
			function( newElements ) {
				otw_hover_effects();
				otw_social_shares();
			}
		);
	} catch(err) { }

	//Infinite Scroll for Newspaper Layout
	try {
		$('.otw_portfolio_manager-infinite-scroll').infinitescroll({
			navSelector  : '.otw_portfolio_manager-pagination',    // selector for the paged navigation 
			nextSelector : '.otw_portfolio_manager-pagination a',  // selector for the NEXT link (to page 2)
			itemSelector : '.otw_portfolio_manager-portfolio-newspaper-item',     // selector for all items you'll retrieve
			loading: {
					finishedMsg: 'No more pages to load.',
					img: 'http://i.imgur.com/qkKy8.gif'
				}
			},

			//call Isotope as a callback
			function( newElements ) {
				var $newElements = $(newElements);

				//slider fixing
				$newElements.find('.otw_portfolio_manager-portfolio-media.otw_portfolio_manager-format-gallery').each(function(){
					var image = new Image();
					image.src = $(this).find('.slides li img').attr("src");
					$(this).css({'max-width': image.naturalWidth + 'px' });
					$(this).find('.slides li').css({'max-width': image.naturalWidth + 'px' });
				});

				if($newElements.find('.otw_portfolio_manager-format-gallery .slides').length > 0 ) {
					$newElements.find('.otw_portfolio_manager-format-gallery').flexslider({
						animation: "slide"
					});
				}

				$('.otw_portfolio_manager-infinite-scroll').isotope( 'appended', $newElements, function(){
					otw_hover_effects();
					otw_social_shares();

					otw_calculate_columns('.otw_portfolio_manager-mosaic-layout');

					$(this).isotope('reLayout');
				});
			}
		);
	} catch(err) { }

	//Infinite Scroll for Horizontal Layout
	try {
		$('.otw_portfolio_manager-horizontal-layout-infinite-scroll').infinitescroll({
			navSelector  : '.otw_portfolio_manager-pagination',    // selector for the paged navigation 
			nextSelector : '.otw_portfolio_manager-pagination a',  // selector for the NEXT link (to page 2)
			itemSelector : '.otw_portfolio_manager-horizontal-item',     // selector for all items you'll retrieve
			loading: {
					finishedMsg: 'No more pages to load.',
					img: 'http://i.imgur.com/qkKy8.gif'
				}
			},

			//call horizontal layout as a callback
			function( newElements ) {
				otw_hover_effects();
				otw_social_shares();
				otw_portfolio_horizontal_layout('.otw_portfolio_manager-horizontal-layout-items');
			}
		);
	} catch(err) { }

	//Infinite Scroll for Timeline Layout
	try {
		$('.otw_portfolio_manager-portfolio-timeline').infinitescroll({
			navSelector  : '.otw_portfolio_manager-pagination',    // selector for the paged navigation 
			nextSelector : '.otw_portfolio_manager-pagination a',  // selector for the NEXT link (to page 2)
			itemSelector : '.otw_portfolio_manager-portfolio-timeline-item',     // selector for all items you'll retrieve
			loading: {
					finishedMsg: 'No more pages to load.',
					img: 'http://i.imgur.com/qkKy8.gif'
				}
			},

			//callback
			function( newElements ) {
				var $newElements = $(newElements);

				//slider fixing
				$newElements.find('.otw_portfolio_manager-portfolio-media.otw_portfolio_manager-format-gallery').each(function(){
					var image = new Image();
					image.src = $(this).find('.slides li img').attr("src");
					$(this).css({'max-width': image.naturalWidth + 'px' });
					$(this).find('.slides li').css({'max-width': image.naturalWidth + 'px' });
				});

				if($newElements.find('.otw_portfolio_manager-format-gallery .slides').length > 0 ) {
					$newElements.find('.otw_portfolio_manager-format-gallery').flexslider({
						animation: "slide"
					});
				}

				//hover styles
				$newElements.each(function(){
					otw_hover_effects();
					otw_social_shares();
				});

				$('.otw_portfolio_manager-portfolio-timeline').append($newElements);

				$('#infscr-loading').remove().insertAfter( $('.otw_portfolio_manager-portfolio-timeline .otw_portfolio_manager-portfolio-timeline-item:last') );

				timeline_layout_fixer();
			}
		);
	} catch(err) { }

	//Tabs
	try {
		$('.otw_portfolio_manager-tabs').tabs();
	} catch(err) { }

	//Accordion
	try {
		$('.otw_portfolio_manager-accordion').accordion({
			heightStyle: "content"
		});
	} catch(err) { }

	//Slider
	$('.otw_portfolio_manager-slider').each(function(){
		var $this = $(this);

		var slider_animation = $(this).data('animation');

		if($this.find('.slides').length > 0 ) {
			if($this.hasClass('otw_portfolio_manager-carousel')){
				var item_margin = $this.data('item-margin');
				var item_per_page = $this.data('item-per-page');
				var item_width = ( ($this.width() - ( item_margin * (item_per_page - 1) )) / item_per_page );

				var prev_text = "";
				var next_text = "";

				if($this.data('type') == "widget"){
					prev_text = '<i class="icon-angle-left"></i>';
					next_text = '<i class="icon-angle-right"></i>';
				}

				$this.flexslider({
					animation: slider_animation,
					animationLoop: false,
					prevText: prev_text,
					nextText: next_text,
					itemWidth: item_width,
					itemMargin: item_margin
				});
			} else {
				$this.flexslider({
					animation: slider_animation,
					smoothHeight: true
				});
			}
		}
	});

	//Timeline Layout
	$('.otw_portfolio_manager-portfolio-timeline.with-heading').before('<div class="otw_portfolio_manager-portfolio-timeline-heading"></div>');
	timeline_layout_fixer();

	//IE8
	$('.otw_portfolio_manager-portfolio-meta-item:last-child').css({'padding': '0px'});
});

var $container = $('.otw_portfolio_manager-portfolio-newspaper');

$(window).on('load', function() {
	//Hover effect
	otw_hover_effects();

	//Socail shares
	otw_social_shares();

	try {
		otw_calculate_columns('.otw_portfolio_manager-mosaic-layout');

		$container.isotope({
			itemSelector: '.otw_portfolio_manager-portfolio-newspaper-item',
			layoutMode: 'masonry',
			/*getSortData: {
				date: function( $elem ) {
					return parseInt(String($elem.attr('data-date')).replace(/-/g, ""));
				},
				alphabetical: function( $elem ) {
					return $elem.attr('data-title');
				}
			}*/
		});

		$('.otw_portfolio_manager-mosaic-layout').each(function(){
			var $this = $(this);

			$(this).isotope({
				masonry: {
					columnWidth: $this.attr('data-item-width')
				}
			});
		});

		var $optionSets_filter = $('.option-set.otw_portfolio_manager-portfolio-filter'),
			$optionLinks_filter = $optionSets_filter.find('a');

		$optionLinks_filter.click(function(e) {
			e.preventDefault();

			var $this = $(this);

			if ($this.hasClass('selected')) {
				return false;
			}

			var $optionSet = $this.parents('.option-set');
			$optionSet.find('.selected').removeClass('selected');
			$this.addClass('selected');

			var selector = $(this).data('filter');
			$(this).parents('.otw_portfolio_manager-portfolio-newspaper-filter').parent().find($container).isotope({filter: selector});
		});
	} catch(err) {}

	//Portfolio Sorting
	var $optionSets_sort = $('.option-set.otw_portfolio_manager-portfolio-sort'),
		$optionLinks_sort = $optionSets_sort.find('a');

	$optionLinks_sort.click(function(e){
		e.preventDefault();

		var $this = $(this);

		if ($this.hasClass('selected')) {
			return false;
		}

		var $optionSet = $this.parents('.option-set');
		$optionSet.find('.selected').removeClass('selected');
		$this.addClass('selected');

		var value = $this.attr('data-option-value');
		$(this).parents('.otw_portfolio_manager-portfolio-newspaper-sort').parent().find($container).isotope({ sortBy : value });
	});

	//Slider width fixing
	$('.otw_portfolio_manager-portfolio-media.otw_portfolio_manager-format-gallery').each(function(){
		var image = new Image();
		image.src = $(this).find('.slides li img').attr("src");
		$(this).css({'max-width': image.naturalWidth + 'px' });
		$(this).find('.slides li').css({'max-width': image.naturalWidth + 'px' });
	});

	//horizontal layout
	otw_portfolio_horizontal_layout('.otw_portfolio_manager-horizontal-layout-items');
});

//Window resize event
try {
	$(window).smartresize(function(){
		try {
			otw_calculate_columns('.otw_portfolio_manager-mosaic-layout');
		} catch(err) { }

		try {
			otw_portfolio_horizontal_layout('.otw_portfolio_manager-horizontal-layout-items');
		} catch(err) { }

		try {
			$('.otw_portfolio_manager-mosaic-layout').each(function(){
				var $this = $(this);

				$(this).isotope({
					masonry: {
						columnWidth: $this.attr('data-item-width')
					}
				});
			});
		} catch(err) { }
	});
} catch(err) { }

function otw_hover_effects(){
	$('.otw_portfolio_manager-hover-effect-3, .otw_portfolio_manager-hover-effect-5, .otw_portfolio_manager-hover-effect-7, .otw_portfolio_manager-hover-effect-8, .otw_portfolio_manager-hover-effect-9, .otw_portfolio_manager-hover-effect-10, .otw_portfolio_manager-hover-effect-12').each(function(){
		$this = $(this).find('.otw_portfolio_manager-portfolio-media.otw_portfolio_manager-format-image > a');

		if( $this.find('span.otw-hover-effect').length == 0 ){
			$this.append('<span class="otw-hover-effect"></span>');
		}
	});

	$('.otw_portfolio_manager-valign-middle').each(function(){
		$(this).css({'margin-top': 0 - ($(this).outerHeight() / 2) + 'px'})
	});

	//Special effects
	$('img', '.otw_portfolio_manager-hover-effect-13 .otw_portfolio_manager-portfolio-media.otw_portfolio_manager-format-image > a').each(function(){
		$(this).clone().addClass("otw_portfolio_manager-hover-img").insertAfter($(this)).load(function(){
			Pixastic.process(this, "desaturate", {average: !1});
		});
	});

	$('img', '.otw_portfolio_manager-hover-effect-14 .otw_portfolio_manager-portfolio-media.otw_portfolio_manager-format-image > a').each(function(){
		$(this).clone().addClass("otw_portfolio_manager-hover-img").insertAfter($(this)).load(function(){
			Pixastic.process(this, "blurfast", {amount: 0.3});
		});
	});

	$('img', '.otw_portfolio_manager-hover-effect-15 .otw_portfolio_manager-portfolio-media.otw_portfolio_manager-format-image > a').each(function(){
		$(this).clone().addClass("otw_portfolio_manager-hover-img").insertAfter($(this)).load(function(){
			Pixastic.process(this, "blurfast", {amount: 0.05});
		});
	});

	$('img', '.otw_portfolio_manager-hover-effect-16 .otw_portfolio_manager-portfolio-media.otw_portfolio_manager-format-image > a').each(function(){
		$(this).clone().addClass("otw_portfolio_manager-hover-img").insertAfter($(this)).load(function(){
			Pixastic.process(this, "glow", {amount: 0.3, radius: 0.2});
		});
	});

	//IE8 frameborder fixer
	$('.otw_portfolio_manager-format-video iframe, .otw_portfolio_manager-format-audio iframe').each(function(){
		$(this).attr({'frameBorder': 'no'});
	});
}

//Masonry layout
function otw_calculate_columns(container) {
	$(container).each(function(){

		var $this = $(this),
			containerWidth = $this.width(),
			minCol = Math.floor(containerWidth / 12);

			//console.log(minCol);

		if (minCol*3 >= 200) {

			if($this.data('columns') == 3){
				$this.attr({'data-item-width': minCol*4});
			} else if($this.data('columns') == 4){
				$this.attr({'data-item-width': minCol*3});
			}

			$('> .otw_portfolio_manager-iso-item', $this).each(function() {
				var $this = $(this);
				if ($this.hasClass('otw_portfolio_manager-1-4')) {
					$this.css('width', minCol*3);
				} else if ($this.hasClass('otw_portfolio_manager-2-4') || $this.hasClass('otw_portfolio_manager-1-2')) {
					$this.css('width', minCol*6);
				} else if ($this.hasClass('otw_portfolio_manager-1-3')) {
					$this.css('width', minCol*4);
				} else if ($this.hasClass('otw_portfolio_manager-2-3')) {
					$this.css('width', minCol*8);
				}
			});

		} else if ( minCol*3 < 200 && minCol*3 > 150) {
			
			$this.attr({'data-item-width': minCol*6});

			$('> .otw_portfolio_manager-iso-item', $this).each(function() {
				var $this = $(this);
				if ($this.hasClass('otw_portfolio_manager-1-4')) {
					$this.css('width', minCol*6);
				} else if ($this.hasClass('otw_portfolio_manager-2-4') || $this.hasClass('otw_portfolio_manager-1-2')) {
					$this.css('width', minCol*12);
				} else if ($this.hasClass('otw_portfolio_manager-1-3')) {
					$this.css('width', minCol*6);
				} else if ($this.hasClass('otw_portfolio_manager-2-3')) {
					$this.css('width', minCol*12);
				}
			});

		}  else if ( minCol*3 <= 150) {
			
			$this.attr({'data-item-width': minCol*12});

			$('> .otw_portfolio_manager-iso-item', $this).each(function() {
				$(this).css('width', minCol*12);
			});
		}

		$('> .otw_portfolio_manager-iso-item', $this).each(function() {
			if( ($(this).hasClass('otw_portfolio_manager-1-2') || $(this).hasClass('otw_portfolio_manager-2-3')) && $(this).hasClass('height1')){
				$(this).css('height', $(this).outerWidth()/2);
			} else if($(this).hasClass('height2')){
				$(this).css('height', $(this).outerWidth()*2);
			} else {
				$(this).css('height', $(this).outerWidth());
			}

			$(this).find('.otw_portfolio_manager-portfolio-media.otw_portfolio_manager-format-image a img').css({'width': $(this).width(), 'height': $(this).height() });
		});
	});
}

//Timeline layout
function timeline_layout_fixer(){
	$('.otw_portfolio_manager-portfolio-timeline .otw_portfolio_manager-portfolio-timeline-item').removeClass('odd').removeClass('even');
	$('.otw_portfolio_manager-portfolio-timeline .otw_portfolio_manager-portfolio-timeline-item:nth-child(2n-1)').addClass('odd');
	$('.otw_portfolio_manager-portfolio-timeline .otw_portfolio_manager-portfolio-timeline-item:nth-child(2n)').addClass('even');
}

//Horizontal layout
function otw_portfolio_horizontal_layout(container){
	$(container).each(function(){
		$(this).css({'opacity': '0'});

		var $this = $(this),
			container_width = $this.parent('.otw_portfolio_manager-horizontal-layout-wrapper').width(),
			row = 1,
			item_margin = $this.data('item-margin'),
			cache_width = 0,
			height_items = [];

		$this.children('.otw_portfolio_manager-horizontal-item').each(function(){
			if( $(this).attr('data-original-width') === undefined ){
				var $img = $(this).find('.otw_portfolio_manager-portfolio-media.otw_portfolio_manager-format-image img');

				$(this).attr({'data-original-width': $img.attr('width')});
				$(this).attr({'data-original-height': $img.attr('height')});

				//remove image size
				$img.attr({'width': ''});
				$img.attr({'height': ''});
			}

			$(this).css({'margin-right': ''});

			cache_width += ( $(this).data('original-width') + item_margin );

			$(this).attr({'data-row': row});

			if( cache_width >= container_width ){
				//new height = original height / original width x new width
				height_items.push( ($(this).data('original-height') / (cache_width - item_margin) * container_width) );

				$(this).css({'margin-right': '0px'});

				cache_width = 0;
				row += 1;
			}
		});

		for (var i = 0; i < height_items.length; i++) {
			$this.children('.otw_portfolio_manager-horizontal-item[data-row="'+ (i + 1) +'"]').each(function(){
				//new width = original wdith / original height x new height
				var new_width = Math.ceil( $(this).data('original-width') / $(this).data('original-height') * height_items[i] );

				$(this).find('.otw_portfolio_manager-portfolio-media.otw_portfolio_manager-format-image').css( {'width': new_width + 'px', 'height': parseInt(height_items[i]) });
			});
		}

		if( $this.children('.otw_portfolio_manager-horizontal-item[data-row="'+ row +'"]').length > 0 ){
			$this.children('.otw_portfolio_manager-horizontal-item[data-row="'+ row +'"]').each(function(){
				$(this).find('.otw_portfolio_manager-portfolio-media.otw_portfolio_manager-format-image').css({'width': $(this).data('original-width') + 'px', 'height': $(this).data('original-height') });
			});

			$this.children('.otw_portfolio_manager-horizontal-item[data-row="'+ row +'"]:last-child').css({'margin-right': '0px'});
		}

		$this.css({'opacity': '1'});
	});
}

//Social shares
function otw_social_shares(){
	$('.otw_portfolio_manager-social-share-buttons-wrapper').each(function(){
		var $this = $(this);
			title = $(this).data('title'),
			description = $(this).data('description'),
			image = $(this).data('image'),
			url = $(this).data('url');

		$.ajax({
			type: 'POST',
			url: 'social-shares.php',
			dataType: 'json',
			cache: false,
			data: 'url='+ url,
			success: function(data) {
				if(data.info !== 'error'){
					$this.find('.otw_portfolio-manager-social-share').each(function(){
						if($(this).hasClass('facebook')){
							$(this).append('<span class="data-shares">'+ data.facebook +'</span>');
							$(this).attr({'href': 'http://www.facebook.com/sharer.php?u='+ url});
						} else if($(this).hasClass('twitter')){
							$(this).append('<span class="data-shares">'+ data.twitter +'</span>');
							$(this).attr({'href': 'https://twitter.com/intent/tweet?source=tweetbutton&text='+ title +'&url='+ encodeURIComponent(url)});
						} else if($(this).hasClass('google_plus')){
							$(this).append('<span class="data-shares">'+ data.google_plus +'</span>');
							$(this).attr({'href': 'https://plus.google.com/share?url='+ url});
						} else if($(this).hasClass('linkedin')){
							$(this).append('<span class="data-shares">'+ data.linkedin +'</span>');
							$(this).attr({'href': 'http://www.linkedin.com/shareArticle?mini=true&url='+ encodeURIComponent(url) +'&title='+ escape(title) +'&summary='+ escape(description)});
						} else if($(this).hasClass('pinterest')){
							$(this).append('<span class="data-shares">'+ data.pinterest +'</span>');
							$(this).attr({'href': 'http://pinterest.com/pin/create/button/?url='+ encodeURIComponent(url) +'&media='+ encodeURIComponent(image) +'&description='+ escape(description)});
						}
					});
				}
			}
		});
	});

	$('.otw_portfolio_manager-social-wrapper').each(function(){
		var $this = $(this);
			title = $(this).data('title'),
			description = $(this).data('description'),
			image = $(this).data('image'),
			url = $(this).data('url');
		
		$(this).children('.otw_portfolio_manager-social-item').each(function(){
			if($(this).hasClass('facebook')){
				$(this).attr({'href': 'http://www.facebook.com/sharer.php?u='+ url});
			} else if($(this).hasClass('twitter')){
				$(this).attr({'href': 'https://twitter.com/intent/tweet?source=tweetbutton&text='+ title +'&url='+ encodeURIComponent(url)});
			} else if($(this).hasClass('google_plus')){
				$(this).attr({'href': 'https://plus.google.com/share?url='+ url});
			} else if($(this).hasClass('linkedin')){
				$(this).attr({'href': 'http://www.linkedin.com/shareArticle?mini=true&url='+ encodeURIComponent(url) +'&title='+ escape(title) +'&summary='+ escape(description)});
			} else if($(this).hasClass('pinterest')){
				$(this).attr({'href': 'http://pinterest.com/pin/create/button/?url='+ encodeURIComponent(url) +'&media='+ encodeURIComponent(image) +'&description='+ escape(description)});
			}
		});
	});
}