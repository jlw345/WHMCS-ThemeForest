document.addEventListener('DOMContentLoaded', function() {
    "use strict";
    sticky();
});
/*----------------------*/
/*   Sticky Sidebar     */
/*----------------------*/
function sticky() {
    $.fn.scrollBottom = function() {
        return $(document).height() - this.scrollTop() - this.height();
    };
    var $el = $('#sidebar');
    var $window = $(window);
    var top = $el.parent().position().top;
    $window.bind("scroll resize", function() {
        var gap = $window.height() - $el.height() - 0;
        var visibleFoot = 965 - $window.scrollBottom();
        var scrollTop = $window.scrollTop()
        if (scrollTop < top + 0) {
            $el.css({
                top: (top - scrollTop) + "px",
                bottom: "auto"
            });
        } else if (visibleFoot > gap) {
            $el.css({
                top: "auto",
                bottom: visibleFoot + "px"
            });
        } else {
            $el.css({
                top: 0,
                bottom: "auto"
            });
        }
    }).scroll();
}