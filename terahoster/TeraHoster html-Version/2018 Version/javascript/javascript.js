/* carousel */
(function($) {
    "use strict";
    //Function to animate slider captions 
    function doAnimations(elems) {
        //Cache the animationend event in a variable
        var animEndEv = 'webkitAnimationEnd animationend';
        elems.each(function() {
            var $this = $(this),
                $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function() {
                $this.removeClass($animationType);
            });
        });
    }
    //Variables on page load 
    var $myCarousel = $('#carousel-g'),
        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
    //Initialize carousel 
    $myCarousel.carousel();
    //Animate captions in first slide on page load 
    doAnimations($firstAnimatingElems);
    //Pause carousel  
    $myCarousel.carousel('pause');
    //Other slides to be animated on carousel slide event 
    $myCarousel.on('slide.bs.carousel', function(e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });
    $('#carousel-g').carousel({
        interval: 4000,
        pause: "false"
    });
})(jQuery);
/* carousel */

// typing animation 
var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function() {
        that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};


/* parallax effect - here you can change images for Parallax effect */
(function($) {
    "use strict";
    $(document).ready(function() {
        $('#quote-carousel').carousel({
            pauseOnHover: true,
            interval: 4000,
        });
    });
    $('.summer-sale').parallax({
        imageSrc: 'img/sliders/default.jpg'
    });
    $('.parallax').parallax({
        imageSrc: 'img/other/07.jpg'
    });
    $('.web-header').parallax({
        imageSrc: 'img/headers/web.jpg'
    });
    $('#our-story').parallax({
        imageSrc: 'img/about/story.jpg'
    });
    $('.team-support').parallax({
        imageSrc: 'img/about/story.jpg'
    });
})(jQuery);

// Preloader // config here
(function($) {
    "use strict";
    $(window).on('load', function() { // makes sure the whole site is loaded 
        $('#status').fadeOut(); // will first fade out the loading animation 
        $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
        $('body').delay(350).css({
            'overflow': 'visible'
        });
    })
})(jQuery);


(function($) {
    "use strict";

    $('html').scrollWithEase({
        frameRate: 100,
        animationTime: 1000,
        stepSize: 87,
        pulseAlgorithm: true,
        pulseScale: 6,
        pulseNormalize: 1,
        accelerationDelta: 20,
        accelerationMax: 1,
        keyboardSupport: true,
        arrowScroll: 50
    });

})(jQuery);

var e = document.getElementById("filt-monthly"),
    d = document.getElementById("filt-hourly"),
    t = document.getElementById("switcher"),
    m = document.getElementById("monthly"),
    y = document.getElementById("yearly");

e.addEventListener("click", function() {
    t.checked = false;
    e.classList.add("toggler--is-active");
    d.classList.remove("toggler--is-active");
    m.classList.remove("hide");
    y.classList.add("hide");
});

d.addEventListener("click", function() {
    t.checked = true;
    d.classList.add("toggler--is-active");
    e.classList.remove("toggler--is-active");
    m.classList.add("hide");
    y.classList.remove("hide");
});

t.addEventListener("click", function() {
    d.classList.toggle("toggler--is-active");
    e.classList.toggle("toggler--is-active");
    m.classList.toggle("hide");
    y.classList.toggle("hide");
})