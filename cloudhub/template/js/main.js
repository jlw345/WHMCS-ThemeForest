// Strict mode
'use strict';

// Global variables
var touch_device = ('ontouchstart' in window) || (window.DocumentTouch && document instanceof window.DocumentTouch) || (navigator.maxTouchPoints > 0),
	$_document = $(document),
	$_window = $(window);

// Touch swipe detection
$.fn.swipe = function(options)
{
	options = $.extend({ left: null, right: null}, options);

	return this.each(function()
	{
		if (options.left || options.right)
		{
			var touchstart_x = 0,
				touchstart_y = 0,
				touchmove_x = 0,
				touchmove_y = 0,
				swipe = false;

			$(this).on('touchstart', function(touchstart_e)
			{
				touchstart_x = touchstart_e.pageX || touchstart_e.touches[0].pageX;
				touchstart_y = touchstart_e.pageY || touchstart_e.touches[0].pageY;
			});

			$(this).on('touchmove', function(touchmove_e)
			{
				if (swipe === false)
				{
					touchmove_x = touchstart_x - (touchmove_e.pageX || touchmove_e.touches[0].pageX);
					touchmove_y = touchstart_y - (touchmove_e.pageY || touchmove_e.touches[0].pageY);

					if (Math.abs(touchmove_x) > 10 && Math.abs(touchmove_y) < 10)
					{
						swipe = touchmove_x > 0 ? 'left' : 'right';
						return false;
					}
				}

				return true;
			});

			$_window.on('touchend', function(touchend_e)
			{
				if (swipe && options[swipe])
				{
					options[swipe]();
				}

				touchmove_x = 0;
				touchmove_y = 0;
				swipe = false;
			});
		}
	});
};

// DOM is ready
$_document.on('DOMContentLoaded', function()
{
	// Document variables
	var $_body = $('body'),
		$_html_body = $('html, body');

	// Confirm touch device detection
	if (touch_device) $_body.addClass('touch-device');

	// Header variables
	var $_header = $('#header'),
		$_header_nav = $_header.find('nav'),
		$_header_nav_primary = $_header_nav.find('ul.nav-primary'),
		$_header_container = $_header.find('.container'),
		header_static = $_header.hasClass('header-static'),
		header_dynamic = $_header.hasClass('header-dynamic'),
		header_nav_overlay = $_header.hasClass('header-nav-overlay');

	// Dynamic header based on scroll
	if (header_dynamic) new Headroom($_header[0], {offset: 120, tolerance: {up: 5}}).init();

	// Display header shadow based on scroll
	if ($_header.hasClass('header-shadow-scroll'))
	{
		var header_shadow_scroll = function()
		{
			$_header[$_window.scrollTop() === 0 ? 'removeClass' : 'addClass']('active');
		};

		$_window.on('scroll', header_shadow_scroll);
		header_shadow_scroll();
	}

	// Process primary navigation
	$_header_nav_primary.find('li').each(function()
	{
		if ($(this).has('ul').length)
		{
			var $_li = $(this),
				$_ul = $_li.find('ul:first');

			$_li.on('mouseenter', function()
			{
				if ((($_ul.outerWidth() + $_ul.offset().left + 20) - $_header_container.offset().left) > $_header_container.width())
				{
					$_ul.addClass('nav-left');
				}
			}).on('mouseleave', function()
			{
				$_ul.removeClass('nav-left');
			});

			if ($_li.find('> .button').length)
			{
				$_ul.addClass('nav-button').css('minWidth', ($_li.outerWidth() - 20) + 'px');
			}
			else
			{
				$_ul.css('minWidth', ($_li.outerWidth() + 20) + 'px');
			}
		}

		if ($(this).find('a.button').length && $(this).next().find('a.button').length)
		{
			$(this).addClass('button-follows');
		}
	});

	// Handle navigation overlay
	if ($_header_nav.length)
	{
		var $_nav_overlay_background = $('<div id="nav-overlay-background"></div>'),
			$_nav_overlay_open = $('<i id="nav-overlay-open" class="material-icons">menu</i>'),
			$_nav_overlay_close = $('<i id="nav-overlay-close" class="material-icons">close</i>'),
			$_nav_overlay = $('<div id="nav-overlay"></div>').append($_header_container.clone().append($_nav_overlay_close)),
			nav_overlay_theme = ($_header.hasClass('header-light') && 'light') || ($_header.hasClass('header-gray') && 'gray') || ($_header.hasClass('header-dark') && 'dark'),
			nav_overlay_class = $.trim((header_nav_overlay ? 'nav-overlay-visible' : '') + ' ' + (nav_overlay_theme ? 'nav-overlay-' + nav_overlay_theme : ''));

		if (nav_overlay_class)
		{
			$_nav_overlay.addClass(nav_overlay_class);
			$_nav_overlay_open.addClass(nav_overlay_class);
			$_nav_overlay_close.addClass(nav_overlay_class);
			$_nav_overlay_background.addClass(nav_overlay_class);
		}

		$_nav_overlay_open.appendTo($_header_container).on('click', function()
		{
			$_body.prepend($_nav_overlay_background, $_nav_overlay);
			$_window.scrollTop(0);
		});

		$_nav_overlay_close.on('click', function()
		{
			$_nav_overlay_background.detach();
			$_nav_overlay.detach();
		});
	}

	// Notification variables
	var $_notification = $('#notification').show(),
		notification_data = $_notification.data();

	// Handle notification dismissal with cookies
	if (notification_data && notification_data.dismissible)
	{
		if (notification_data.title && Cookies.get('notification-' + notification_data.title))
		{
			$_notification.remove();
		}
		else
		{
			if (header_nav_overlay)
			{
				$_notification.addClass('notification-dismiss-align');
			}

			$('<i id="notification-dismiss" class="material-icons">close</i>').prependTo($_notification.find('div.container')).on('click', function()
			{
				$_notification.addClass('notification-hide');

				if (notification_data.title)
				{
					Cookies.set('notification-' + notification_data.title, 0,
					{
						expires: $.isNumeric(notification_data.expires) ? notification_data.expires : ''
					});
				}
			});
		}
	}

	// Handle text typing animation
	$('span.type-text').each(function()
	{
		var $_type_text = $(this),
			type_text_value = $.trim($_type_text.text()),
			type_text_data = $_type_text.data('type-text'),
			type_text_data_speed = ($_type_text.data('type-text-speed') || 0.1) * 1000,
			type_text_data_delay = ($_type_text.data('type-text-delay') || 2) * 1000,
			type_text_data_loop = $_type_text.data('type-text-loop') ? true : false,
			type_text_data_length = 0,
			type_text_data_key = 0,
			type_text_position = 0,
			type_text_delete = false,
			type_text_delay = false;

		if (type_text_data)
		{
			type_text_data = type_text_data.split(';');
			$.map(type_text_data, $.trim);

			if (type_text_value)
			{
				type_text_data.unshift(type_text_value);
				type_text_position = type_text_data[type_text_data_key].length;
				type_text_delete = true;
			}

			if (type_text_data_length = type_text_data.length)
			{
				var type_text = function()
				{
					if (type_text_position < type_text_data[type_text_data_key].length || type_text_delete)
					{
						setTimeout(function()
						{
							type_text_delay = false;
							type_text_position = type_text_position + (type_text_delete ? -1 : 1);
							$_type_text.text(type_text_data[type_text_data_key].substr(0, type_text_position));

							if (type_text_data_key < (type_text_data_length - 1) || type_text_data_loop)
							{
								if (type_text_delete && type_text_position === 0)
								{
									type_text_data_key = type_text_data_key === (type_text_data_length - 1) && type_text_data_loop ? 0 : type_text_data_key + 1;
									type_text_delete = false;
								}
								else if (type_text_position === type_text_data[type_text_data_key].length)
								{
									type_text_delete = true;
									type_text_delay = true;
								}
							}

							setTimeout(type_text, type_text_delay ? type_text_data_delay : 0);
						}, type_text_delete ? (type_text_data_speed / 2) : type_text_data_speed);
					}
				};

				setTimeout(type_text, type_text_value ? type_text_data_delay : 0);
			}
		}
	});

	// Process custom form styles
	$('form input[type="checkbox"]:not(.no-custom-style), form input[type="radio"]:not(.no-custom-style)').each(function()
	{
		var $_input = $(this),
			input_type = $_input.attr('type'),
			$_form_row = $_input.closest('div.form-row'),
			$_input_style = $('<div class="' + input_type + '-style"></div>'),
			$_input_style_icon = $('<div class="' + input_type + '-style-icon"></div>'),
			$_input_change = input_type === 'checkbox' ? $_input : $_input.closest('form').find('input[name="' + $_input.attr('name') + '"]');

		$_input_style_icon.on('click', function()
		{
			if ($_input.is(':disabled') === false)
			{
				$_input.filter(':not([type="radio"]:checked)').prop('checked', $_input.is(':checked') === false);
				$_input_change.trigger('change');
			}
		});

		$_input_change.on('change', function()
		{
			$_input_style[$_input.is(':checked') ? 'addClass' : 'removeClass']('active');
		});

		$_input.closest('form').on('reset', function()
		{
			setTimeout(function()
			{
				$_input_change.trigger('change');
			}, 10);
		});

		$_input.on('focus blur', function(e)
		{
			$_input_style[e.type === 'focus' ? 'addClass' : 'removeClass']('focus');
		});

		if ($_form_row.find('input[type="' + input_type + '"]').length === 1) $_form_row.addClass(input_type + '-style-block');
		if (input_type === 'checkbox') $_input_style_icon.append('<i class="fas fa-check"></i>');
		if ($_input.is(':disabled')) $_input_style.addClass('disabled');
		if ($_input.is(':checked')) $_input_style.addClass('active');
		$_input.after($_input_style.append($_input_style_icon));
		$_input_style.append($_input);
	});

	$('form select:not([multiple]):not(.no-custom-style)').each(function()
	{
		var $_select = $(this),
			$_select_style_input = $('<input type="text">'),
			$_select_style = $('<div class="select-style"></div>'),
			$_select_style_icon = $('<i class="fas fa-chevron-down"></i>');

		$_select.on('change', function()
		{
			$_select_style_input.val($_select.find('option:selected').text());
		});

		$_select.on('focus blur', function(e)
		{
			$_select_style_input[e.type === 'focus' ? 'addClass' : 'removeClass']('focus');
		});

		$_select.closest('form').on('reset', function()
		{
			setTimeout(function()
			{
				$_select.trigger('change');
			}, 10);
		});

		$_select_style_input.on('focus', function()
		{
			$_select.trigger('focus');
		});

		$_select_style_input.val($_select.find('option:selected').text());
		$_select_style_input.attr($_select.is(':disabled') ? 'disabled' : 'readonly', true);
		$_select.after($_select_style.append($_select_style_icon, $_select_style_input));
		$_select_style.append($_select);
	});

	$('form input[type="search"]:not(.no-custom-style)').each(function()
	{
		var $_search = $(this),
			$_search_form = $_search.closest('form'),
			$_search_style = $('<div class="search-style"></div>'),
			$_search_style_icon = $('<div class="search-style-icon"><i class="fas fa-search"></i></div>');

		$_search_style_icon.on('click', function()
		{
			$_search_form.submit();
		});

		$_search.after($_search_style.append($_search_style_icon));
		$_search_style.append($_search);
	});

	// Process tab groups
	$('div.tab-group').each(function()
	{
		var $_tab_group = $(this),
			$_tab_group_nav = $('<ul></ul>'),
			$_tab_group_items = $_tab_group.find('div.tab-item'),
			tab_group_item_active = Math.max(0, $_tab_group_items.filter(location.hash && $_tab_group_items.filter(location.hash).length ? location.hash : '.active').index());

		if ($_tab_group_items.length > 1)
		{
			$_tab_group_items.each(function(key)
			{
				var $_tab_group_item = $(this),
					$_tab_group_nav_li = $('<li></li>'),
					$_tab_group_nav_div = $('<div class="tab-item-title"></div>'),
					$_tab_group_item_inner = $('<div class="tab-item-inner"></div>'),
					tab_group_item_title = $_tab_group_item.data('title') || key,
					tab_group_item_id = $_tab_group_item.attr('id');

				var tab_group_item_change = function()
				{
					if (tab_group_item_id) history.pushState(null, null, '#' + tab_group_item_id);
					$_tab_group.find('div.tab-title').removeClass('active');
					$_tab_group_nav.find('li').removeClass('active');
					$_tab_group_items.removeClass('active');
					$_tab_group_nav_div.addClass('active');
					$_tab_group_nav_li.addClass('active');
					$_tab_group_item.addClass('active');
				};

				if (key === tab_group_item_active)
				{
					$_tab_group_nav_div.addClass('active');
					$_tab_group_nav_li.addClass('active');
					$_tab_group_item.addClass('active');
				}

				if (tab_group_item_id)
				{
					$_tab_group_item.removeAttr('id');
					$_tab_group.prepend('<a id="' + tab_group_item_id + '"></a>');
					$_window.on('hashchange', function()
					{
						if (location.hash.substr(1) === tab_group_item_id) tab_group_item_change();
					});
				}

				$_tab_group_nav_div.text(tab_group_item_title).on('click', tab_group_item_change).prependTo($_tab_group_item.wrapInner($_tab_group_item_inner));
				$_tab_group_nav_li.text(tab_group_item_title).on('click', tab_group_item_change).appendTo($_tab_group_nav);
			});

			$_tab_group.prepend($_tab_group_nav);
		}
	});

	// Process gallery and client interaction
	$('div.gallery').each(function(gallery_key)
	{
		var $_gallery = $(this),
			$_gallery_inner = $_gallery.find('ul'),
			$_gallery_links = $_gallery_inner.find('li a'),
			$_gallery_images = $_gallery_inner.find('li img');

		if ($_gallery_links.length > 0)
		{
			$_gallery_links.on('click', function(e)
			{
				var gallery_link_href_click = $(this).attr('href');

				if ($.inArray(gallery_link_href_click.split('.').pop(), ['jpg', 'jpeg', 'png', 'gif']) > -1)
				{
					var $_gallery_overlay = $('<div id="gallery-overlay"></div>'),
						$_gallery_overlay_close = $('<i id="gallery-overlay-close" class="material-icons">close</i>'),
						$_gallery_overlay_previous = $('<i id="gallery-overlay-previous" class="material-icons">chevron_left</i>'),
						$_gallery_overlay_next = $('<i id="gallery-overlay-next" class="material-icons">chevron_right</i>'),
						$_gallery_overlay_title = $('<p id="gallery-overlay-title" class="hide"></p>'),
						$_gallery_overlay_inner = $('<ul></ul>'),
						$_gallery_overlay_inner_li = null,
						gallery_overlay_active = 0,
						gallery_overlay_key = 0;

					var gallery_overlay_keydown = function(e)
					{
						if (e.keyCode === 27)
						{
							$_gallery_overlay_close.click();
						}
						else if (e.keyCode === 37)
						{
							$_gallery_overlay_previous.click();
						}
						else if (e.keyCode === 39)
						{
							$_gallery_overlay_next.click();
						}
					};

					$_gallery_links.each(function(gallery_link_key)
					{
						var gallery_link_href = $(this).attr('href'),
							gallery_link_title = $(this).attr('title');

						if ($.inArray(gallery_link_href.split('.').pop(), ['jpg', 'jpeg', 'png', 'gif']) > -1)
						{
							var $_gallery_image_loading = $('<div class="loading hide"></div>'),
								$_gallery_image = $('<img id="gallery-overlay-' + gallery_key + '-' + (gallery_overlay_key++) + '">');

							if (gallery_link_href_click === gallery_link_href)
							{
								var delay = setTimeout(function()
								{
									$_gallery_image_loading.removeClass('hide');
								}, 50);

								$_gallery_image.attr('src', gallery_link_href).imagesLoaded(function()
								{
									if (delay)
									{
										clearTimeout(delay);
									}

									$_gallery_image_loading.addClass('hide');
									$_gallery_image.addClass('ready');
								});

								if (gallery_link_title)
								{
									$_gallery_overlay_title.text(gallery_link_title).removeClass('hide');
								}

								gallery_overlay_active = gallery_link_key;
							}
							else
							{
								$_gallery_image.data('src', gallery_link_href);
							}

							if (gallery_link_title)
							{
								$_gallery_image.data('title', gallery_link_title);
							}

							$_gallery_overlay_inner.append($('<li></li>').append($_gallery_image_loading, $_gallery_image));
						}
					});

					$_gallery_overlay_inner_li = $_gallery_overlay_inner.find('li');
					$_gallery_overlay_inner_li.each(function(gallery_overlay_inner_li_key)
					{
						$(this).css(
						{
							width: (100 / $_gallery_overlay_inner_li.length) + '%',
							left: ((100 / $_gallery_overlay_inner_li.length) * gallery_overlay_inner_li_key) + '%'
						});
					});

					$_window.on('keydown', gallery_overlay_keydown);
					$_body.prepend($_gallery_overlay.append($_gallery_overlay_inner));
					$_gallery_overlay.append($_gallery_overlay_close, $_gallery_overlay_title);
					$_gallery_overlay_inner.css('width', ($_gallery_overlay_inner_li.length * 100) + '%');
					$_gallery_overlay_close.on('click', function()
					{
						$_window.off('keydown', gallery_overlay_keydown);
						$_gallery_overlay.remove();
					});

					if ($_gallery_overlay_inner_li.length > 1)
					{
						var gallery_overlay_change = function(active)
						{
							var $_gallery_image = $('#gallery-overlay-' + gallery_key + '-' + active),
								$_gallery_loading = $_gallery_image.parent().find('div.loading'),
								gallery_image_data_src = $_gallery_image.data('src'),
								gallery_image_data_title = $_gallery_image.data('title');

							if (gallery_image_data_src)
							{
								var delay = setTimeout(function()
								{
									$_gallery_loading.removeClass('hide');
								}, 50);

								$_gallery_image.data('src', '').attr('src', gallery_image_data_src).imagesLoaded(function()
								{
									if (delay)
									{
										clearTimeout(delay);
									}

									$_gallery_loading.addClass('hide');
									$_gallery_image.addClass('ready');
								});
							}

							if (gallery_image_data_title)
							{
								$_gallery_overlay_title.text(gallery_image_data_title).removeClass('hide');
							}
							else
							{
								$_gallery_overlay_title.addClass('hide');
							}

							$_gallery_overlay_previous[active === 0 ? 'hide' : 'show']();
							$_gallery_overlay_next[(active + 1) === $_gallery_overlay_inner_li.length ? 'hide' : 'show']();
							$_gallery_overlay_inner.css('transform', 'translateX(-' + ((100 / $_gallery_overlay_inner_li.length) * active) + '%)');
						};

						var gallery_overlay_previous = function()
						{
							if ((gallery_overlay_active - 1) > -1)
							{
								gallery_overlay_change(gallery_overlay_active = gallery_overlay_active - 1);
							}
						};

						var gallery_overlay_next = function()
						{
							if ((gallery_overlay_active + 1) < $_gallery_overlay_inner_li.length)
							{
								gallery_overlay_change(gallery_overlay_active = gallery_overlay_active + 1);
							}
						};

						if (gallery_overlay_active > 0)
						{
							gallery_overlay_change(gallery_overlay_active);
						}
						else
						{
							$_gallery_overlay_previous.hide();
						}

						if (touch_device)
						{
							$_gallery_overlay.swipe(
							{
								left: gallery_overlay_next,
								right: gallery_overlay_previous
							});
						}

						$_gallery_overlay.append($_gallery_overlay_previous, $_gallery_overlay_next);
						$_gallery_overlay_previous.on('click', gallery_overlay_previous);
						$_gallery_overlay_next.on('click', gallery_overlay_next);
					}

					e.preventDefault();
				}
			});
		}

		if ($_gallery_images.length > 1 && $_gallery.is('.gallery-slider'))
		{
			var $_gallery_previous = $('<i class="gallery-previous material-icons">chevron_left</i>'),
				$_gallery_next = $('<i class="gallery-next material-icons">chevron_right</i>'),
				gallery_image_rotation = $(this).data('rotation'),
				gallery_image_active = 0;

			var gallery_height = function($_image, animate)
			{
				$_image.imagesLoaded(function()
				{
					$_gallery[animate ? 'addClass' : 'removeClass']('gallery-animate').css('height', $_image.height() + 'px');
				});
			};

			var gallery_change = function(inactive, active, clear)
			{
				if (clear && gallery_image_rotation)
				{
					clearInterval(gallery_image_rotation);
				}

				gallery_height($('#gallery-' + gallery_key + '-' + active), true);
				$_gallery_inner.css('transform', 'translateX(-' + ((100 / $_gallery_images.length) * active) + '%)');
			};

			var gallery_previous = function()
			{
				gallery_change(gallery_image_active, gallery_image_active = (gallery_image_active - 1) < 0 ? ($_gallery_images.length - 1) : (gallery_image_active - 1), true);
			};

			var gallery_next = function()
			{
				gallery_change(gallery_image_active, gallery_image_active = (gallery_image_active + 1) > ($_gallery_images.length - 1) ? 0 : (gallery_image_active + 1), true);
			};

			$_gallery_images.each(function(key)
			{
				if (key === 0)
				{
					$_window.on('load', function()
					{
						gallery_height($('#gallery-' + gallery_key + '-' + key), false);
					});
				}

				$(this).attr('id', 'gallery-' + gallery_key + '-' + key);
			});

			if (touch_device)
			{
				$_gallery.swipe(
				{
					left: gallery_next,
					right: gallery_previous
				});
			}

			$_gallery_previous.on('click', gallery_previous);
			$_gallery_next.on('click', gallery_next);
			$_window.on('resize', function()
			{
				gallery_height($('#gallery-' + gallery_key + '-' + gallery_image_active), false);
			});

			$_gallery_inner.css('width', ($_gallery_images.length * 100) + '%');
			$_gallery.prepend($_gallery_previous, $_gallery_next);

			if (gallery_image_rotation)
			{
				gallery_image_rotation = setInterval(function()
				{
					gallery_change(gallery_image_active, gallery_image_active = (gallery_image_active + 1) > ($_gallery_images.length - 1) ? 0 : (gallery_image_active + 1), false);
				}, gallery_image_rotation * 1000);
			}
		}
	});

	// Process interaction with product term selectors
	$('select.product-term-select').each(function(select_key)
	{
		var $_product_term_select = $(this),
			$_product_term_select_sync = $('select.product-term-select[data-sync="' + $_product_term_select.data('sync') + '"]'),
			$_product_box = $_product_term_select.parents('div.product-box'),
			$_product_button = $_product_box.find('div.product-order a.button'),
			$_product_price = $_product_box.find('div.product-price');

		var product_term_select = function(e)
		{
			if ($_product_term_select.is(':disabled') === false)
			{
				var $_select_active = $_product_term_select.find('option:selected'),
					select_active_data_price = $_select_active.data('price'),
					select_active_data_term = $_select_active.data('term'),
					select_active_data_href = $_select_active.data('href');

				if (select_active_data_href && $_product_button.length)
				{
					$_product_button.attr('href', select_active_data_href);
				}

				if (select_active_data_price && $_product_price.length)
				{
					$_product_price.html(select_active_data_price);

					if (select_active_data_term)
					{
						$_product_price.append('<span class="term">' + select_active_data_term + '</span>');
					}
				}

				if ($_product_term_select_sync.length && e && e.originalEvent)
				{
					$_product_term_select_sync.find('option:eq(' + $_select_active.index() + ')').prop('selected', true).change();
				}
			}
		};

		$_product_term_select.on('change', product_term_select);
		product_term_select();
	});

	// Process product sliders and client interaction
	$('div.product-slider').each(function(slider_key)
	{
		var $_product_slider = $(this),
			$_products = $_product_slider.find('> ul'),
			products_li_length = $_products.first().find('li').length,
			products_active_length = $_products.filter('.active').length;

		if ($_products.length > 0)
		{
			var slider_segment_width = 100 / $_products.length,
				$_product_slider_sync = $('div.product-slider[data-sync="' + $_product_slider.data('sync') + '"]'),
				$_slider = $('<div class="slider clear"></div>'),
				$_handle = $('<div class="handle"></div>'),
				$_range = $('<div class="range"></div>');

			var move_slider = function(client_x, click)
			{
				var client_offset_left = ((client_x - $_slider.offset().left) / $_slider.width()) * 100,
					product = Math.min(Math.max(client_offset_left / (100 / $_products.length), 1), $_products.length),
					product_next = Math.round(product),
					product_difference = Math.abs(product_next - product);

				if (product_difference < 0.1 || click)
				{
					if ($_product_slider_sync.length)
					{
						$_product_slider_sync.each(function()
						{
							$(this).find('> ul').removeClass('active');
							$(this).find('div.range').css('width', (slider_segment_width * product_next) + '%');
							$('#' + $(this).attr('id') + '-' + (product_next - 1)).addClass('active');
						});
					}
					else
					{
						$_products.removeClass('active');
						$_range.css('width', (slider_segment_width * product_next) + '%');
						$('#product-slider-' + slider_key + '-' + (product_next - 1)).addClass('active');
					}
				}
				else
				{
					$_range.css('width', client_offset_left + '%');
				}
			};

			$_products.each(function(product_key)
			{
				if ((products_active_length === 0 && product_key === 0) || (products_active_length === 1 && $(this).is('.active')))
				{
					$(this).addClass('active');
					$_range.css('width', (slider_segment_width * (product_key + 1)) + '%').append($_handle);
				}

				$(this).attr('id', 'product-slider-' + slider_key + '-' + product_key);
				$_slider.append('<div class="segment" style="width: ' + slider_segment_width + '%;"></div>');
			});

			$_slider.on('click', function(e)
			{
				move_slider(e.pageX, true);
			});

			$_handle.on('mousedown touchstart', function(e_down)
			{
				$_window.on('mousemove touchmove', function(e_move){ move_slider(e_move.pageX || e_move.touches[0].pageX, false); });
				$_window.on('mouseup touchend', function(e_up){ move_slider(e_up.pageX || e_up.changedTouches[0].pageX, true); $_window.off('mousemove touchmove').off('mouseup touchend'); });
				e_down.preventDefault();
			});

			$_product_slider.attr('id', 'product-slider-' + slider_key);
			$_product_slider.prepend($_slider.prepend($_range));
		}
	});

	// Process product configurator and client interaction
	$('div.product-configurator').each(function(configurator_key)
	{
		var $_product_configurator = $(this),
			$_product_configurator_sync = $('div.product-configurator[data-sync="' + $_product_configurator.data('sync') + '"]'),
			$_product_configurator_total = $_product_configurator.find('div.configurator-total span.value'),
			$_product_configurator_input = $_product_configurator.find('div.configurator-row input'),
			product_configurator_currency = $_product_configurator.data('currency');

		if ($_product_configurator.length && $_product_configurator_input.length && product_configurator_currency)
		{
			$_product_configurator_input.each(function(input_key)
			{
				var $_configurator_input = $(this),
					$_configurator_group = $('<div class="configurator-group"></div>'),
					$_configurator_slider = $('<div class="slider clear"></div>'),
					$_configurator_handle = $('<div class="handle"></div>'),
					$_configurator_range = $('<div class="range"></div>'),
					$_configurator_title = $('<span class="value"></span>'),
					configurator_input_value = Number($_configurator_input.val()),
					configurator_input_data_min = Number($_configurator_input.data('min')),
					configurator_input_data_max = Number($_configurator_input.data('max')),
					configurator_input_data_step = Number($_configurator_input.data('step')),
					configurator_input_data_price = Number($_configurator_input.data('price')),
					configurator_input_data_title = $_configurator_input.data('title'),
					configurator_input_data_title_plural = $_configurator_input.data('title-plural'),
					configurator_input_data_description = $_configurator_input.data('description');

				if (isNaN(configurator_input_data_step))
				{
					configurator_input_data_step = configurator_input_data_min;
				}

				var configurator_input_step = configurator_input_data_max / configurator_input_data_step,
					configurator_slider_segment_width = 100 / configurator_input_step;

				if (configurator_input_step === parseInt(configurator_input_step, 10))
				{
					var update_configurator = function(args)
					{
						if (args.el_configurator_title.length)
						{
							args.val_configurator_input = args.val_configurator_input + (args.val_configurator_title_plural && args.val_configurator_input != 1 ? args.val_configurator_title_plural : args.val_configurator_title);
							args.el_configurator_title.html(args.val_configurator_input);
						}

						if (args.el_product_configurator_total.length)
						{
							var configurator_input_total = 0;

							args.el_product_configurator_input.each(function()
							{
								var configurator_input_total_value = Number($(this).val()),
									configurator_input_total_data_price = Number($(this).data('price')),
									configurator_input_total_data_step = Number($(this).data('step')) || Number($(this).data('min'));

								if (configurator_input_total_value > 0)
								{
									configurator_input_total+= (configurator_input_total_value / configurator_input_total_data_step) * configurator_input_total_data_price;
								}
							});

							args.el_product_configurator_total.html(args.val_product_configurator_currency.replace('%', (Math.round(configurator_input_total * Math.pow(10, 4)) / Math.pow(10, 4))));
						}
					};

					var move_slider = function(client_x, click)
					{
						var client_offset_left = ((client_x - $_configurator_slider.offset().left) / $_configurator_slider.width()) * 100,
							client_offset_left_min = configurator_slider_segment_width * (configurator_input_data_min / configurator_input_data_step),
							configurator_step = Math.min(Math.max(client_offset_left / (100 / configurator_input_step), configurator_input_data_min > 0 ? 1 : 0), configurator_input_step),
							configurator_step_next = Math.round(configurator_step),
							configurator_step_difference = Math.abs(configurator_step_next - configurator_step),
							configurator_input_value_next = configurator_input_data_step * configurator_step_next,
							configurator_range_width = Math.min(Math.max(client_offset_left, client_offset_left_min), 100);

						if (configurator_input_value_next < configurator_input_data_min)
						{
							configurator_step_next = configurator_input_data_min / configurator_input_data_step;
							configurator_input_value_next = configurator_input_data_min;
						}

						if (client_offset_left >= client_offset_left_min && (configurator_step_difference < 0.1 || click))
						{
							configurator_range_width = configurator_slider_segment_width * configurator_step_next;
						}

						if ($_product_configurator_sync.length)
						{
							$_product_configurator_sync.each(function()
							{
								var $_product_configurator_sync_item = $(this),
									$_product_configurator_sync_item_total = $_product_configurator_sync_item.find('div.configurator-total span.value'),
									$_product_configurator_sync_item_input = $_product_configurator_sync_item.find('div.configurator-row input'),
									$_product_configurator_sync_item_input_active = $_product_configurator_sync_item_input.filter('[name="' + $_configurator_input.attr('name') + '"]'),
									$_product_configurator_sync_item_input_active_row = $_product_configurator_sync_item_input_active.parents('div.configurator-row');

								$_product_configurator_sync_item_input_active_row.find('div.range').css('width', configurator_range_width + '%');
								$_product_configurator_sync_item_input_active.val(configurator_input_value_next);

								update_configurator(
								{
									el_configurator_title: $_product_configurator_sync_item_input_active_row.find('div.configurator-group span.value'),
									el_product_configurator_total: $_product_configurator_sync_item_total,
									el_product_configurator_input: $_product_configurator_sync_item_input,
									val_configurator_input: configurator_input_value_next,
									val_configurator_title: $_product_configurator_sync_item_input_active.data('title'),
									val_configurator_title_plural: $_product_configurator_sync_item_input_active.data('title-plural'),
									val_product_configurator_currency: $_product_configurator_sync_item.data('currency')
								});
							});
						}
						else
						{
							$_configurator_range.css('width', configurator_range_width + '%');
							$_configurator_input.val(configurator_input_value_next);

							update_configurator(
							{
								el_configurator_title: $_configurator_title,
								el_product_configurator_total: $_product_configurator_total,
								el_product_configurator_input: $_product_configurator_input,
								val_configurator_input: configurator_input_value_next,
								val_configurator_title: configurator_input_data_title,
								val_configurator_title_plural: configurator_input_data_title_plural,
								val_product_configurator_currency: product_configurator_currency
							});
						}
					};

					for (var i = -1; i < configurator_input_step; i++)
					{
						if (configurator_input_value == ((i + 1) * configurator_input_data_step))
						{
							$_configurator_range.css('width', (configurator_slider_segment_width * (i + 1)) + '%').append($_configurator_handle);
						}

						$_configurator_slider.append('<div class="segment" style="width: ' + configurator_slider_segment_width + '%;"></div>');
					}

					$_configurator_slider.on('click', function(e)
					{
						move_slider(e.pageX, true);
					});

					$_configurator_handle.on('mousedown touchstart', function(e_down)
					{
						$_window.on('mousemove touchmove', function(e_move){ move_slider(e_move.pageX || e_move.touches[0].pageX, false); });
						$_window.on('mouseup touchend', function(e_up){ move_slider(e_up.pageX || e_up.changedTouches[0].pageX, true); $_window.off('mousemove touchmove').off('mouseup touchend'); });
						e_down.preventDefault();
					});

					$_configurator_input.before($_configurator_group.html($_configurator_title).append(configurator_input_data_description ? '<span class="label">' + configurator_input_data_description + '</span>' : ''));
					$_configurator_input.before($_configurator_slider.prepend($_configurator_range));

					update_configurator(
					{
						el_configurator_title: $_configurator_title,
						el_product_configurator_total: $_product_configurator_total,
						el_product_configurator_input: $_product_configurator_input,
						val_configurator_input: configurator_input_value,
						val_configurator_title: configurator_input_data_title,
						val_configurator_title_plural: configurator_input_data_title_plural,
						val_product_configurator_currency: product_configurator_currency
					});
				}
			});
		}
	});

	// Generate line numbers for pre code
	$('pre.pre-code').each(function()
	{
		var $_ul = $('<ul></ul>'),
			code = $(this).html().trim('\n'),
			code_lines = code.split('\n').length;

		if (code_lines)
		{
			for (var i = 1; i <= code_lines; i++)
			{
				$_ul.append('<li>' + i + '</li>');
			}

			$(this).removeClass('pre-code').wrap('<div class="pre-code"></div>').after($_ul);
		}
	});

	// Automatically adjust iframe height
	$('iframe.iframe-keep-aspect-ratio').each(function()
	{
		var $_iframe = $(this),
			iframe_width = $(this).attr('width'),
			iframe_height = $(this).attr('height');

		var iframe_resize = function()
		{
			var iframe_resize_width = $_iframe.width(),
				iframe_resize_height = 0;

			if (iframe_width !== iframe_resize_width)
			{
				iframe_resize_height = Math.round((iframe_height / iframe_width) * iframe_resize_width);
				$_iframe.css('height', iframe_resize_height + 'px');
			}
		};

		$_window.on('resize', iframe_resize);
		iframe_resize();
	});

	// Format tables with responsive headers and caption
	$('table').each(function()
	{
		if ($(this).is('.table-layout-static') === false)
		{
			var $_thead_th = $(this).find('thead tr th'),
				$_tbody_tr = $(this).find('tbody tr');

			if ($_thead_th.length && $_tbody_tr.length)
			{
				$_thead_th.each(function(key)
				{
					var $_tbody_td = $_tbody_tr.find('td:nth-of-type(' + (key + 1) + ')'),
						th_text = $(this).text();

					if ($_tbody_td.length && th_text)
					{
						$_tbody_td.addClass('has-responsive-th').prepend('<span class="responsive-th">' + th_text + '</span>');
					}
				});
			}
		}

		$(this).has('caption').addClass('table-has-caption');
	});

	// Process grid layouts
	$('div.grid').each(function()
	{
		var $_grid = $(this),
			$_grid_items = $_grid.find('> div.grid-item'),
			$_grid_container = $_grid.closest('div.container'),
			grid_data_columns = $_grid.data('grid-columns'),
			grid_data_gap = $_grid.data('grid-gap');

		if ($_grid_items.length)
		{
			grid_data_columns = grid_data_columns || 3;
			grid_data_gap = grid_data_gap >= 0 ? grid_data_gap : 60;

			var grid_update = function()
			{
				var grid_container_width = $_grid_container.outerWidth(),
					grid_data_columns_resize = grid_data_columns,
					grid_data_gap_resize = grid_data_gap,
					window_width = $_window.width();

				$.each([512, 768, 1024], function(key, value)
				{
					if (window_width <= value)
					{
						grid_data_columns_resize = Math.max(grid_data_columns - (3 - key), 1);
						grid_data_gap_resize = Math.min(grid_data_gap, 30);
						return false;
					}
				});

				$_grid_items.css('width', ((grid_container_width - (grid_data_gap_resize * (grid_data_columns_resize - 1))) / grid_data_columns_resize).toFixed(4) + 'px');
				Bricks({ container: $_grid[0], packed: 'data-grid', sizes: [{ columns: grid_data_columns_resize, gutter: grid_data_gap_resize }] }).pack();
			};

			$_window.on('resize', grid_update);
			$_window.on('load', grid_update);
			grid_update();
		}
	});

	// Automatically adjust content row height
	$('section.content-row').each(function()
	{
		var $_content_row = $(this),
			content_row_half_height = $_content_row.hasClass('content-row-half-height'),
			content_row_full_height = $_content_row.hasClass('content-row-full-height');

		if (content_row_half_height || content_row_full_height)
		{
			var content_row_resize_height = 0,
				content_row_resize_factor = content_row_full_height ? 1 : 2,
				content_row_first = $_content_row.is('section.content-row:first');

			var content_row_resize = function()
			{
				$_content_row.css('height', 'auto');
				content_row_resize_height = Math.round(($_window.height() - (content_row_first ? $_content_row.offset().top : (header_dynamic ? 0 : $_header.outerHeight()))) / content_row_resize_factor);

				if (content_row_resize_height > $_content_row.outerHeight())
				{
					$_content_row.css('height', content_row_resize_height + 'px');
				}
			};

			$_window.on('resize', content_row_resize);
			$_window.on('load', content_row_resize);
			content_row_resize();
		}
	});

	// Process content sliders and client interaction
	$('div.content-slider').each(function(content_slider_key)
	{
		var $_content_slider = $(this),
			$_content_slider_slides = $_content_slider.find('> .slide'),
			$_content_slider_inner = $('<div class="content-slider-inner"></div>'),
			content_slider_slides_length = $_content_slider_slides.length;

		if (content_slider_slides_length)
		{
			var content_slider_height = function()
			{
				var content_slider_container_height = 0,
					content_slider_padding_top = parseInt($_content_slider_slides.css('padding-top'), 10),
					content_slider_padding_bottom = parseInt($_content_slider_slides.css('padding-bottom'), 10);

				$_content_slider_slides.find('div.container').each(function()
				{
					content_slider_container_height = Math.max(content_slider_container_height, $(this).outerHeight());
				});

				$_content_slider.css('height', (content_slider_container_height + content_slider_padding_top + content_slider_padding_bottom) + 'px');
			};

			if (content_slider_slides_length > 1)
			{
				var content_slider_slide_active = 0,
					content_slider_nav = $_content_slider.data('nav'),
					content_slider_rotation = $_content_slider.data('rotation'),
					$_content_slider_nav = $('<ul></ul>'),
					$_content_slider_nav_li = null;

				var content_slider_slide_change = function(inactive, active, clear)
				{
					if (clear && content_slider_rotation)
					{
						clearInterval(content_slider_rotation);
					}

					if (content_slider_nav)
					{
						$('#content-slider-nav-' + content_slider_key + '-' + inactive).removeClass('active');
						$('#content-slider-nav-' + content_slider_key + '-' + active).addClass('active');
					}

					if (inactive > active)
					{
						$('#content-slider-' + content_slider_key + '-' + inactive).addClass('inactive animate-previous').removeClass('active');
						$('#content-slider-' + content_slider_key + '-' + active).addClass('active animate-previous').removeClass('inactive');
					}
					else
					{
						$('#content-slider-' + content_slider_key + '-' + inactive).addClass('inactive').removeClass('active animate-previous');
						$('#content-slider-' + content_slider_key + '-' + active).addClass('active').removeClass('inactive animate-previous');
					}
				};

				var content_slider_previous = function()
				{
					content_slider_slide_change(content_slider_slide_active, content_slider_slide_active = (content_slider_slide_active - 1) < 0 ? (content_slider_slides_length - 1) : (content_slider_slide_active - 1), true);
				};

				var content_slider_next = function()
				{
					content_slider_slide_change(content_slider_slide_active, content_slider_slide_active = (content_slider_slide_active + 1) > (content_slider_slides_length - 1) ? 0 : (content_slider_slide_active + 1), true);
				};

				if ((content_slider_slide_active = $_content_slider.find('.slide.active').index()) === -1)
				{
					content_slider_slide_active = 0;
				}

				$_content_slider_slides.each(function(key)
				{
					if (content_slider_nav)
					{
						var $_content_slider_nav_li_append = $('<li></li>'),
							content_slider_slide_title = $(this).data('title'),
							content_slider_slide_title_resize = null;

						if (key === content_slider_slide_active)
						{
							$_content_slider_nav_li_append.addClass('active');
						}

						if (content_slider_slide_title)
						{
							content_slider_slide_title_resize = function()
							{
								$_content_slider_nav_li_append.text($_window.width() <= 768 ? '' : content_slider_slide_title);
							};

							$_window.on('resize', content_slider_slide_title_resize);
							content_slider_slide_title_resize();
						}

						$_content_slider_nav_li_append.attr('id', 'content-slider-nav-' + content_slider_key + '-' + key).data('slide', key);
						$_content_slider_nav.append($_content_slider_nav_li_append);
					}

					if (key === content_slider_slide_active)
					{
						$(this).removeClass('active').addClass('active-first');
					}

					$(this).attr('id', 'content-slider-' + content_slider_key + '-' + key);
				});

				if (content_slider_nav)
				{
					$_content_slider.addClass('content-slider-has-nav').prepend($_content_slider_nav);
					$_content_slider_nav_li = $_content_slider_nav.find('li').on('click', function()
					{
						content_slider_slide_change(content_slider_slide_active, content_slider_slide_active = $(this).data('slide'), true);
					});
				}

				if ($_content_slider.data('nav-directional'))
				{
					var $_content_slider_previous = $('<i class="slide-previous material-icons">chevron_left</i>'),
						$_content_slider_next = $('<i class="slide-next material-icons">chevron_right</i>');

					$_content_slider.prepend($_content_slider_previous, $_content_slider_next);
					$_content_slider_previous.on('click', content_slider_previous);
					$_content_slider_next.on('click', content_slider_next);
				}

				if (touch_device)
				{
					$_content_slider.swipe(
					{
						left: content_slider_next,
						right: content_slider_previous
					});
				}

				if (content_slider_rotation)
				{
					content_slider_rotation = setInterval(function()
					{
						content_slider_slide_change(content_slider_slide_active, content_slider_slide_active = (content_slider_slide_active + 1) > (content_slider_slides_length - 1) ? 0 : (content_slider_slide_active + 1), false);
					}, content_slider_rotation * 1000);
				}
			}
			else
			{
				$_content_slider_slides.removeClass('active').addClass('active-first');
			}

			$_content_slider.append($_content_slider_inner.append($_content_slider_slides));
			$_window.on('resize', content_slider_height);
			$_window.on('load', content_slider_height);
			content_slider_height();
		}
	});

	// Process content row backgrounds
	$('div.content-background').each(function()
	{
		var $_content_background = $(this),
			$_content_background_item = $_content_background.find('i, svg, img, video, iframe');

		if ($_content_background_item.length)
		{
			var content_background_icon = $_content_background_item.is('i'),
				content_background_media = $_content_background_item.is('svg, img, video'),
				content_background_scale = $_content_background.hasClass('content-background-scale'),
				content_background_scroll = $_content_background.hasClass('content-background-scroll');

			if (content_background_icon)
			{
				content_background_icon = function()
				{
					var content_background_width = $_content_background.outerWidth(),
						content_background_height = $_content_background.outerHeight();

					$_content_background_item.css('font-size', Math.round(Math[content_background_scale ? 'min' : 'max'](content_background_width, content_background_height)) + 'px');
				};

				$_window.on('resize', content_background_icon);
				$_window.on('load', content_background_icon);
				content_background_icon();
			}
			else if (content_background_media)
			{
				content_background_media = function()
				{
					$_content_background.removeClass('object-fit-width');
					$_content_background.removeClass('object-fit-height');

					if (content_background_scale)
					{
						var content_background_width = $_content_background.outerWidth(),
							content_background_item_width = $_content_background_item.outerWidth();

						if (content_background_width < content_background_item_width)
						{
							$_content_background.addClass('object-fit-width');
						}

						var content_background_height = $_content_background.outerHeight(),
							content_background_item_height = $_content_background_item.outerHeight();

						if (content_background_height < content_background_item_height)
						{
							$_content_background.addClass('object-fit-height');
						}
					}
					else
					{
						var content_background_height = $_content_background.outerHeight(),
							content_background_item_height = $_content_background_item.outerHeight();

						if (content_background_height > content_background_item_height)
						{
							$_content_background.addClass('object-fit-height');
						}
					}
				};

				$_content_background_item.on('loadeddata', content_background_media);
				$_window.on('resize', content_background_media);
				$_window.on('load', content_background_media);
				content_background_media();
			}

			if (content_background_scroll)
			{
				var $_content_row = $_content_background.closest('section.content-row'),
					content_background_scroll_request = null;

				content_background_scroll = function()
				{
					var content_row_offset_top = $_content_row.offset().top,
						content_row_height = $_content_row.outerHeight(),
						window_scroll_top = $_window.scrollTop(),
						window_height = $_window.height();

					if ((window_scroll_top + window_height) > content_row_offset_top && window_scroll_top < (content_row_offset_top + content_row_height))
					{
						$_content_background.css('transform', 'translate3d(0, ' + (40 * (((window_scroll_top + window_height) - content_row_offset_top) / (content_row_height + window_height)).toFixed(4) - 20) + '%, 0)');
					}
				};

				if (window.requestAnimationFrame)
				{
					content_background_scroll_request = function()
					{
						requestAnimationFrame(content_background_scroll);
					};
				}

				$_window.on('resize scroll', content_background_scroll_request || content_background_scroll);
				$_window.on('load', content_background_scroll);
				content_background_scroll();
			}
		}
	});

	// Handle video overlay links
	$('a.video-overlay').each(function()
	{
		var $_video_overlay_link = $(this),
			video_overlay_href = $_video_overlay_link.attr('href'),
			video_overlay_width = $_video_overlay_link.data('width') || 1280,
			video_overlay_height = $_video_overlay_link.data('height') || 720;

		if (video_overlay_href)
		{
			var video_youtube = video_overlay_href.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/),
				video_vimeo = video_overlay_href.match(/(?:https?:\/{2})?(?:w{3}\.)?vimeo\.com\/(\d+)(?:$|[^\s&]+)/),
				video_html = $.inArray(video_overlay_href.split('.').pop(), ['mp4', 'mov']) > -1;

			if (video_youtube || video_vimeo || video_html)
			{
				if ($_video_overlay_link.find('> img').length)
				{
					$_video_overlay_link.addClass('video-overlay-has-icon');
					$_video_overlay_link.append('<i id="video-overlay-icon" class="material-icons">play_arrow</i>');
				}

				video_youtube = video_youtube ? 'https://www.youtube.com/embed/' + video_youtube[1] + '?autoplay=1' : false;
				video_vimeo = video_vimeo ? 'https://player.vimeo.com/video/' + video_vimeo[1] + '?autoplay=1' : false;
				video_html = video_html ? video_overlay_href : false;

				$_video_overlay_link.on('click', function(e)
				{
					var $_video_overlay = $('<div id="video-overlay"></div>'),
						$_video_overlay_close = $('<i id="video-overlay-close" class="material-icons">close</i>'),
						$_video_overlay_player = $(video_html ? '<video controls autoplay></video>' : '<iframe allowfullscreen></iframe>');

					var video_overlay_keydown = function(e)
					{
						if (e.keyCode === 27)
						{
							$_video_overlay_close.click();
						}
					};

					var video_overlay_resize = function()
					{
						var video_scale = Math.min(($_window.width() - 120) / video_overlay_width, ($_window.height() - 120) / video_overlay_height);

						$_video_overlay_player.css(
						{
							maxWidth: video_overlay_width + 'px',
							maxHeight: video_overlay_height + 'px',
							width: Math.round(video_scale * video_overlay_width) + 'px',
							height: Math.round(video_scale * video_overlay_height) + 'px'
						});
					};

					$_video_overlay.append($_video_overlay_player.attr('src', video_html ? video_html : (video_youtube ? video_youtube : video_vimeo)));
					$_body.prepend($_video_overlay.append($_video_overlay_close));
					$_window.on('keydown', video_overlay_keydown);
					$_window.on('resize', video_overlay_resize);
					$_video_overlay_close.on('click', function()
					{
						$_window.off('keydown', video_overlay_keydown);
						$_window.off('resize', video_overlay_resize);
						$_video_overlay.remove();
					});

					video_overlay_resize();
					e.preventDefault();
				});
			}
		}
	});

	// Handle iframe overlay links
	$('a.iframe-overlay').each(function()
	{
		var $_iframe_overlay_link = $(this),
			iframe_overlay_src = $_iframe_overlay_link.data('src'),
			iframe_overlay_width = $_iframe_overlay_link.data('width'),
			iframe_overlay_height = $_iframe_overlay_link.data('height');

		if (iframe_overlay_src)
		{
			$_iframe_overlay_link.on('click', function(e)
			{
				var $_iframe_overlay = $('<div id="iframe-overlay"></div>'),
					$_iframe_overlay_close = $('<i id="iframe-overlay-close" class="material-icons">close</i>'),
					$_iframe_overlay_container = $('<iframe allowfullscreen></iframe>').attr('src', iframe_overlay_src);

				var iframe_overlay_keydown = function(e)
				{
					if (e.keyCode === 27)
					{
						$_iframe_overlay_close.click();
					}
				};

				var iframe_overlay_resize = function()
				{
					if (iframe_overlay_width && iframe_overlay_height)
					{
						var iframe_scale = Math.min(($_window.width() - 120) / iframe_overlay_width, ($_window.height() - 120) / iframe_overlay_height);

						$_iframe_overlay_container.css(
						{

							maxWidth: iframe_overlay_width + 'px',
							maxHeight: iframe_overlay_height + 'px',
							width: Math.round(iframe_scale * iframe_overlay_width) + 'px',
							height: Math.round(iframe_scale * iframe_overlay_height) + 'px'
						});
					}
					else
					{
						$_iframe_overlay_container.css(
						{
							width: ($_window.width() - 120) + 'px',
							height: ($_window.height() - 120) + 'px'
						});
					}
				};

				if (iframe_overlay_width && iframe_overlay_height)
				{
					$_iframe_overlay_container.attr('width', iframe_overlay_width);
					$_iframe_overlay_container.attr('height', iframe_overlay_height);
				}

				$_iframe_overlay.append($_iframe_overlay_container);
				$_body.prepend($_iframe_overlay.append($_iframe_overlay_close));
				$_window.on('keydown', iframe_overlay_keydown);
				$_window.on('resize', iframe_overlay_resize);
				$_iframe_overlay_close.on('click', function()
				{
					$_window.off('keydown', iframe_overlay_keydown);
					$_window.off('resize', iframe_overlay_resize);
					$_iframe_overlay.remove();
				});

				iframe_overlay_resize();
				e.preventDefault();
			});
		}
	});

	// Handle modal overlays
	$('div.modal').each(function()
	{
		var $_modal = $(this),
			$_modal_header = $_modal.find('> div.modal-header'),
			$_modal_content = $_modal.find('> div.modal-content'),
			$_modal_overlay = $('<div id="modal-overlay"></div>'),
			$_modal_container = $('<div class="modal-container"></div>'),
			$_modal_dismiss = $('<i class="material-icons modal-dismiss">close</i>'),
			modal_data = $_modal.data('modal'),
			modal_data_show = $_modal.data('modal-show'),
			modal_data_dismissible = $_modal.data('modal-dismissible');

		if ($_modal_header.length && $_modal_content.length && modal_data)
		{
			var modal_show = function(e)
			{
				$('#modal-overlay i.modal-dismiss').click();
				$_window.on('keydown', modal_dismiss_keydown);
				$_modal_container.append($_modal_header, $_modal_content);
				$_body.prepend($_modal_overlay.append($_modal_container));
				e && e.preventDefault();
			};

			var modal_dismiss = function(e)
			{
				$_window.off('keydown', modal_dismiss_keydown);
				$_modal.append($_modal_header, $_modal_content);
				$_modal_overlay.remove();
				e && e.preventDefault();
			};

			var modal_dismiss_keydown = function(e)
			{
				e.keyCode === 27 && modal_data_dismissible && modal_dismiss(e);
			};

			if ($_modal.hasClass('modal-small')) $_modal_container.addClass('modal-container-small');
			else if ($_modal.hasClass('modal-large')) $_modal_container.addClass('modal-container-large');
			$('[data-modal-dismiss="' + modal_data + '"]').on('click', modal_dismiss);
			$('[data-modal-target="' + modal_data + '"]').on('click', modal_show);
			$_modal_dismiss.on('click', modal_dismiss);
			$_modal_header.append($_modal_dismiss);

			if (modal_data_dismissible !== true)
			{
				$_modal_dismiss.hide();
			}

			if (modal_data_show)
			{
				if ($.isNumeric(modal_data_show))
				{
					setTimeout(function()
					{
						modal_show();
					}, modal_data_show * 1000);
				}
				else
				{
					modal_show();
				}
			}
		}
	});

	// Handle internal links
	var $_location_target = null,
		location_hash = location.hash;

	var location_scroll_position = function()
	{
		return Math.round($_location_target.offset().top - (header_static ? 0 : $_header.outerHeight()));
	};

	if (location_hash && ($_location_target = $(location_hash)).length)
	{
		var location_scroll_load = function()
		{
			$_html_body.scrollTop(location_scroll_position());
		};

		$_window.on('load', location_scroll_load);
		location_scroll_load();
	}

	$_document.on('click', 'a[href*="#"]', function(e)
	{
		if (location_hash = this.hash)
		{
			var location_target_scroll_position = 0,
				location_target_split = this.href.split('#'),
				location_split = location.toString().split('#');

			if (location_target_split[0] === '' || location_target_split[0] === location_split[0])
			{
				if (($_location_target = $(location_hash)).length)
				{
					if (header_dynamic) $_header.addClass('headroom--disabled');
					$_html_body.animate({ scrollTop: (location_target_scroll_position = location_scroll_position()) }, Math.max(400, Math.round(Math.abs($_window.scrollTop() - location_target_scroll_position) / 5)), function()
					{
						if (header_dynamic)
						{
							setTimeout(function()
							{
								$_header.removeClass('headroom--disabled headroom--unpinned');
								$_header.addClass('headroom--pinned');
							}, 10);
						}
					});

					if ($_header_nav.length) $_nav_overlay_close.click();
					history.pushState(null, null, location_hash);
					$_window.trigger('hashchange');
					e.preventDefault();
				}
			}
		}
	});

	// Handle content preloading
	$_body.hasClass('preload') && $_window.on('load', function()
	{
		window.setTimeout(function()
		{
			$_body.addClass('preload-done').on('transitionend', function()
			{
				$_body.removeClass('preload preload-done');
			});
		}, 600);
	});
});