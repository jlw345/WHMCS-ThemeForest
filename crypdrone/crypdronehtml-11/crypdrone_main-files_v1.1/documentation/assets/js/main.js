/*

Project     : DAdmin - Responsive Bootstrap HTML Admin Dashboard
Version     : 1.0
Author      : ThemeLooks
Author URI  : https://themeforest.net/user/themelooks

*/

(function ($) {
    "use strict";
    
    /* ------------------------------------------------------------------------- *
     * COMMON VARIABLES
     * ------------------------------------------------------------------------- */
    var $wn = $(window),
        $document = $(document),
        $body = $('body');

    $(function () {
        /* ------------------------------------------------------------------------- *
         * Scroll Spy
         * ------------------------------------------------------------------------- */
        var $scrollSpy = $('[data-trigger~="scroll_spy"] li ul a');

        $scrollSpy.each(function ( indx ) {
            $( this.hash ).waypoint(function (dir) {
                if ( 'down' === dir ) {
                    $scrollSpy[ this.indx ].classList.add('active');

                    if ( this.indx > 0 ) {
                        $scrollSpy[ this.indx - 1 ].classList.remove('active');
                    }
                } else if ( 'up' === dir ) {
                    $scrollSpy[ this.indx - 1 ].classList.add('active');
                    $scrollSpy[ this.indx ].classList.remove('active');
                }
            }, { offset: '120' })[0].indx = indx;
        });


        /* ------------------------------------------------------------------------- *
         * Smooth Scroll Links
         * ------------------------------------------------------------------------- */
        var $smoothScrollLinks = $('[data-trigger~="smooth_scroll_link"], [data-trigger~="smooth_scroll_links"] a:not([href="#"])');

        $smoothScrollLinks.on('click', function (e) {
            var $el, $el_target;

            e.preventDefault();

            $el = $(this);
            $el_target = $( $el.attr('href') );

            $wn.scrollTo($el_target, 800, {
                offset: -120
            });
        });


        /* ------------------------------------------------------------------------- *
         * Scroll Bar
         * ------------------------------------------------------------------------- */
        var $scrollBar = $('[data-trigger="scrollbar"]');

        $scrollBar.each(function () {
            var $ps, $pos;

            $ps = new PerfectScrollbar(this);

            $pos = localStorage.getItem( 'ps.' + this.classList[0] );

            if ( $pos !== null ) {
                $ps.element.scrollTop = $pos;
            }
        });

        $scrollBar.on('ps-scroll-y', function () {
            localStorage.setItem( 'ps.' + this.classList[0], this.scrollTop );
        });


        /* ------------------------------------------------------------------------- *
         * Toggle Sidebar
         * ------------------------------------------------------------------------- */
        var $toggleSidebar = $('[data-toggle="sidebar"]');

        $toggleSidebar.on('click', function (e) {
            e.preventDefault();

            $body.toggleClass('sidebar-mini');
        });
    });

}(jQuery));
