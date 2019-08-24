(function ($) {
    "use strict";
    
    $.cColorSwitcher = function(params) {
        
        // Default options
        params = $.extend({
            'position': 'left',
            'switcherTitle': 'No Colors',
            'switcherColors': [],
            'switcherTarget': ''
        }, params);
        
        // Main wrapper div
        var $wrapper = $('<div id="cColorSwitcher" class="clearfix"></div>'),
            $body = $('body');
        
        $wrapper.css({
            'position': 'fixed',
            'top': '50%',
            'left': '-250px',
            'z-index': '9999'
        });
        
        // Switcher body
        $('<div class="ccs--body"><h6 style="margin: 0; font-size: 16px; line-height: 24px;">'+ params.switcherTitle  +'</h6><ul style="margin: 0; padding: 0; list-style: none; overflow: hidden"></ul></div>')
            .css({
                'width': '250px',
                'border': '1px solid #e9e9e9',
                'padding': '15px',
                'float': 'left',
                'background-color': '#fff',
                'box-shadow': 'rgba(0, 0, 0, 0.137255) 0px 9px 46px 0px, rgba(0, 0, 0, 0.117647) 0px 11px 15px 0px, rgba(0, 0, 0, 0.2) 0px 24px 38px 0px'
            })
            .appendTo($wrapper)
            .children('ul')
                .append(function () {
                    var colors = '', i;
            
                    for ( i = 0; i < params.switcherColors.length; i++ ) {
                        if ( typeof params.switcherColors[i].fgColor === "undefined" ) {
                            params.switcherColors[i].fgColor = 'transparent';
                        }
                        
                        colors = colors + '<li data-file-path="'+ params.switcherColors[i].filepath +'"><span style="position: absolute; width: 100%; height: 100%; background-color: '+ params.switcherColors[i].bgColor +';"></span><span style="position: absolute;  top: 0; right: -2px; width: 20px; height: 45px; transform: rotate(45deg); background-color: '+ params.switcherColors[i].fgColor +';"></span></li>';
                    }
            
                    return colors;
                })
                .children('li')
                    .css({
                        'position': 'relative',
                        'float': 'left',
                        'width': '30px',
                        'height': '30px',
                        'margin-top': '10px',
                        'margin-right': '10px',
                        'border': '1px solid #e9e9e9',
                        'overflow': 'hidden',
                        'cursor': 'pointer'
                    })
                    .on('click', function () {
                        var $t = $(this);

                        if (params.switcherTarget.length) {
                            params.switcherTarget.attr('href', $t.data('file-path'));
                        }

                        if ( !$t.hasClass('active') ) {
                            $t.addClass('active').siblings().removeClass('active');
                        }
            
                        $switcherToggleBtn.css('background-color', $t.children('span').eq(0).css('background-color'));
                    }).children('span')
                        .css({
                            'position': 'absolute'
                        });
        
        // Toggle button
        var $switcherToggleBtn = $('<div class="ccs--toggle-btn"><i class="fa fa-paint-brush"></i></div>')
            .css({
                'float': 'right',
                'width': '50px',
                'padding': '12px 4px 12px 0',
                'color': '#fff',
                'background-color': params.switcherColors[0].bgColor,
                'border-top-right-radius': '50px',
                'border-bottom-right-radius': '50px',
                'box-shadow': 'rgba(0, 0, 0, 0.137255) 10px 5px 46px 8px, rgba(0, 0, 0, 0.2) 10px 0px 26px -6px',
                'font-family': '"Arial", sans-serif',
                'font-size': '18px',
                'font-weight': '100',
                'line-height': '22px',
                'text-align': 'center',
                'cursor': 'pointer'
            })
            .on('click', function () {
                if ( $wrapper.hasClass('opened') ) {
                    $wrapper.removeClass('opened');
                    
                    if ( params.position === 'right' ) {
                        $wrapper.animate({ 'right': '-250px' }, 500);
                    } else {
                        $wrapper.animate({ 'left': '-250px' }, 500);
                    }
                } else {
                    $wrapper.addClass('opened');
                    
                    if ( params.position === 'right' ) {
                        $wrapper.animate({ 'right': '0' }, 500);
                    } else {
                        $wrapper.animate({ 'left': '0' }, 500);
                    }
                }
            })
            .appendTo($wrapper);
        
        // Wrapper position
        if ( params.position === 'right' ) {
            $wrapper.css({
                'left': 'auto',
                'right': '-250px'
            });
            
            $wrapper.find('.ccs--body').css('float', 'right');
        }
        
        // Append wrapper to body
        $wrapper.appendTo($body);
        
        
        return $wrapper;
    };
})(jQuery);
