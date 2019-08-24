/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
    var container, button, menu, links, i, len;

    container = document.getElementById( 'site-navigation' );
    if ( ! container ) {
        return;
    }

    button = container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof button ) {
        return;
    }

    menu = container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof menu ) {
        button.style.display = 'none';
        return;
    }

    menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
        menu.className += ' nav-menu';
    }

    button.onclick = function() {
        if ( -1 !== container.className.indexOf( 'toggled' ) ) {
            container.className = container.className.replace( ' toggled', '' );
            button.setAttribute( 'aria-expanded', 'false' );
            menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            container.className += ' toggled';
            button.setAttribute( 'aria-expanded', 'true' );
            menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    links    = menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( i = 0, len = links.length; i < len; i++ ) {
        links[i].addEventListener( 'focus', toggleFocus, true );
        links[i].addEventListener( 'blur', toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'focus' ) ) {
                    self.className = self.className.replace( ' focus', '' );
                } else {
                    self.className += ' focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( container ) {
        var touchStartFn, i,
            parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, i;

                if ( ! menuItem.classList.contains( 'focus' ) ) {
                    e.preventDefault();
                    for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
                        if ( menuItem === menuItem.parentNode.children[i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[i].classList.remove( 'focus' );
                    }
                    menuItem.classList.add( 'focus' );
                } else {
                    menuItem.classList.remove( 'focus' );
                }
            };

            for ( i = 0; i < parentLink.length; ++i ) {
                parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }
    }( container ) );
} )();





(function ($) {
    $.fn.countTo = function (options) {
        options = options || {};

        return jQuery(this).each(function () {
            // set options for current element
            var settings = $.extend({}, $.fn.countTo.defaults, {
                from:            jQuery(this).data('from'),
                to:              jQuery(this).data('to'),
                speed:           jQuery(this).data('speed'),
                refreshInterval: jQuery(this).data('refresh-interval'),
                decimals:        jQuery(this).data('decimals')
            }, options);

            // how many times to update the value, and how much to increment the value on each update
            var loops = Math.ceil(settings.speed / settings.refreshInterval),
                increment = (settings.to - settings.from) / loops;

            // references & variables that will change with each update
            var self = this,
                $self = jQuery(this),
                loopCount = 0,
                value = settings.from,
                data = $self.data('countTo') || {};

            $self.data('countTo', data);

            // if an existing interval can be found, clear it first
            if (data.interval) {
                clearInterval(data.interval);
            }
            data.interval = setInterval(updateTimer, settings.refreshInterval);

            // initialize the element with the starting value
            render(value);

            function updateTimer() {
                value += increment;
                loopCount++;

                render(value);

                if (typeof(settings.onUpdate) == 'function') {
                    settings.onUpdate.call(self, value);
                }

                if (loopCount >= loops) {
                    // remove the interval
                    $self.removeData('countTo');
                    clearInterval(data.interval);
                    value = settings.to;

                    if (typeof(settings.onComplete) == 'function') {
                        settings.onComplete.call(self, value);
                    }
                }
            }

            function render(value) {
                var formattedValue = settings.formatter.call(self, value, settings);
                $self.text(formattedValue);
            }
        });
    };

    $.fn.countTo.defaults = {
        from: 0,               // the number the element should start at
        to: 0,                 // the number the element should end at
        speed: 100,           // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,           // the number of decimal places to show
        formatter: formatter,  // handler for formatting the value before rendering
        onUpdate: null,        // callback method for every time the element is updated
        onComplete: null       // callback method for when the element finishes updating
    };

    function formatter(value, settings) {
        return value.toFixed(settings.decimals);
    }
}(jQuery));

jQuery(function ($) {

    // start all the timers
    jQuery('.timer').each(count);

    // restart a timer when a button is clicked
    jQuery( window ).scroll(function () {//console.log(jQuery(window).scrollTop());
        if(jQuery(window).scrollTop() > 300 && jQuery(window).scrollTop() < 850)
        {
            jQuery('.timer').each(count);
        }
    });

    function count(options) {
        var $this = jQuery(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
    }
});

jQuery(window).on('load', function() { // makes sure the whole site is loaded
    jQuery('#status').fadeOut(); // will first fade out the loading animation
    jQuery('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    jQuery('body').delay(350).css({'overflow':'visible'});
})


jQuery(window).on('load', function() { // makes sure the whole site is loaded
    jQuery('#status').fadeOut(); // will first fade out the loading animation
    jQuery('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    jQuery('body').delay(350).css({'overflow':'visible'});
});


(function(){
    jQuery('#carousel123').carousel({ interval: 5000 });

    jQuery('.carousel-showsixmoveone .item').each(function(){
        var itemToClone = jQuery(this);

        for (var i=1;i<3;i++) {
            itemToClone = itemToClone.next();

            // wrap around if at end of item collection
            if (!itemToClone.length) {
                itemToClone = jQuery(this).siblings(':first');
            }

            // grab item, clone, add marker class, add to collection
            itemToClone.children(':first-child').clone()
                .addClass("cloneditem-"+(i))
                .appendTo(jQuery(this));
        }
    });

    /*****************Back  To Top *******************************/
    jQuery(document).ready(function(){
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 50) {
                jQuery('#back-to-top').fadeIn();
            } else {
                jQuery('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        jQuery('#back-to-top').click(function () {
            jQuery('#back-to-top');
            jQuery('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        jQuery('#back-to-top');

    });
	
}());
jQuery(document).ready(function(){
  jQuery(".hamburger").click(function(){
    jQuery(this).toggleClass("is-active");
  });
});
