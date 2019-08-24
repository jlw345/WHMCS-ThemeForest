	// hosting plans with chekout //

    jQuery('.tree-steps-hosting-plans-footer-btn').on('click', function() {
	var hostingplanid = $(this).closest(".tree-steps-hosting-plans-footer-btn").attr("id");
	if (jQuery(this).hasClass('first-step-hosting')) {
	$('#' + hostingplanid + '-content .tree-steps-hosting-plans-list').fadeOut(300);  
	$('#' + hostingplanid + ' .first-step-hosting-text').fadeOut(0);
	$('#' + hostingplanid + '.tree-steps-hosting-plans-footer-btn').fadeOut(300).delay(1500).fadeIn(500);
	$('#' + hostingplanid + ' .second-step-hosting-text').delay(1500).fadeIn(300);
	$('#' + hostingplanid + '-content .tree-steps-hosting-plans-footer-btn-back').delay(1500).fadeIn(300);
	$('#' + hostingplanid + '-content .loader-tree-steps-hosting-plans-body').delay(300).fadeIn(300).delay(1000).fadeOut(300);
	$('#' + hostingplanid + '-content .tree-steps-hosting-plans-payment').delay(1500).fadeIn(300);
	}
	$(this).removeClass("first-step-hosting");
    });

	jQuery('.tree-steps-hosting-plans-footer-btn-back').on('click', function() {
    $('#' + this.id + '-steps-content .tree-steps-hosting-plans-payment').fadeOut(300);
	$('#' + this.id + '-steps-content .loader-tree-steps-hosting-plans-body').delay(300).fadeIn(300).delay(1000).fadeOut(300);
	$('#' + this.id + '-steps-content .tree-steps-hosting-plans-list').delay(1500).fadeIn(300);
	$('#' + this.id + '-steps .second-step-hosting-text').fadeOut(0);
	$('#' + this.id + '-steps.tree-steps-hosting-plans-footer-btn').fadeOut(300).delay(1500).fadeIn(500);
	$('#' + this.id + '-steps .first-step-hosting-text').delay(1500).fadeIn(300);
	$('#' + this.id + '-steps .tree-steps-hosting-plans-footer-btn-back').fadeOut(300);
	$('#' + this.id + '-steps.tree-steps-hosting-plans-footer-btn').addClass("first-step-hosting");
    });
	
	
	
	// hosting plans with chekout price yearly and monthly //
	$('#monthly-yearly-chenge a').on('click', function() {
    $(this).addClass('active').siblings().removeClass('active');
	
	if (jQuery('.monthly-price').hasClass('active')) {
	$('.tree-steps-hosting-plans-price').addClass('monthly');
	$('.tree-steps-hosting-plans-price').removeClass('yearly');
	}
	
	if (jQuery('.yearli-price').hasClass('active')) {
	$('.tree-steps-hosting-plans-price').addClass('yearly');
	$('.tree-steps-hosting-plans-price').removeClass('monthly');
	}
    });
	
	
	
	
	
	
	// domain anouncement order //
	
    jQuery('.domain-tci-order').on('click', function() {
	$(this).addClass("open-search");
	$('#' + this.id + '-content .domain-homepage-anouncement-speacial-form').addClass("in");
	$('#' + this.id + '-content .domain-tci').addClass("in");
	$('#' + this.id).addClass("d-none");
	$('#' + this.id + '-content .domain-tci-buttons').addClass("in");
	});
	jQuery('.domain-tci-check').on('click', function() {
	$(this).addClass("fas fa-circle-notch rotate360icon");
	$('#' + this.id + '-offre-content .domain-tci-added-to-card-mesage').delay(1500).fadeIn(300);
	});
	
	jQuery('.domain-tci-cancel').on('click', function() {
	$('#' + this.id + '-domains-offre-content .domain-homepage-anouncement-speacial-form').removeClass("in");
	$('#' + this.id + '-domains-offre-content .domain-tci').removeClass("in");
	$('#' + this.id + '-domains-offre').removeClass("d-none");
	$('#' + this.id + '-domains-offre-content .domain-tci-buttons').removeClass("in");
	});
	
	
	
	// flickity carousel//
	
	$('.carousel-main-services').flickity({
     contain: false,
     pageDots: false
	 });
	 
	$('.carousel-nav-services').flickity({
     asNavFor: '.carousel-main-services',
     contain: true,
     pageDots: false,
	 prevNextButtons: false
	 });

	 
	// header slider carousel//
	$('.main-header-slider').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
	items:1,
	dots:true,
    });
	 
	 
	 
	// load more services //
	$(document).ready(function () {
    size_li = $("#oursevices li").size();
    $('#oursevices li:lt(3)').show();
    $('#showLess').hide();
    var items =  size_li;
    var shown =  3;
    $('#loadMore').click(function () {
        $('#showLess').show();
        shown = $('#oursevices li:visible').size()+5;
        if(shown< items) {$('#oursevices li:lt('+shown+')').show();}
        else {$('#oursevices li:lt('+items+')').show();
             $('#loadMore').hide();
             }
    });
    $('#showLess').click(function () {
        $('#oursevices li').not(':lt(3)').hide();
		$('#loadMore').show();
    } 
	);
    });
	 
	 
	// pertners carousel //
	$('.pertners-carousel').owlCarousel({
    loop: false,
    nav: false,
	dots: false,
	autoplay: false,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
    });
	
	 $(document).ready(function() {
    $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
	items: 3,
	nav: false,
    })
    });
			
	
	
	// header search area //
	$(".search-headr").click(function(e){
    var e=window.event||e;
    $(".search-header-block").addClass("show-block");
	$(".closesrch-her-block").removeClass("np-dsp-block");
    });
  
    $(".closesrch-her-block").click(function(e){
    var e=window.event||e;
    $(".closesrch-her-block").addClass("np-dsp-block");
	$(".search-header-block").removeClass("show-block");
    });
	
	
	// header resize//
	function resize()
    {
    var heights = window.innerHeight;
    document.getElementById("header").style.height = heights + "px";
    }
    resize();
    window.onresize = function() {
    resize();
    }; 
	
	window.onload = function() {
	Particles.init({
    selector: '.backgroundssdlo'
	});
	};
	
	
	// header text change//
	$(function(){
		$("#typed").typed({
			strings: ["your company. ", "your website. ","your blog. ", "your apps. "],
			typeSpeed: 90,
			loop:true,
		});
	});
		

		
	// page loeader //	
	(function () {
    $('.preloader').delay(200).fadeOut('slow');
    }());
	
	
	// botstrap loeader //	
	$(function () {
	$('[data-toggle="tooltip"]').tooltip()
	})
	
	
	// fixed header layout //	
	$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 500) {
    $(".top-header-nav-home").addClass("top-header-fixed");
    } else {
    $(".top-header-nav-home").removeClass("top-header-fixed");
    };

    if (scroll <= 600) {
    $(".top-header-fixed").addClass("top-header-fixed-btom0");
    } else {
    $(".top-header-fixed").removeClass("top-header-fixed-btom0");
    }
    });
	
	
	// video model //	
	$(document).ready(function() {
	var $videoSrc;  
	$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
	});
	console.log($videoSrc);
	// when the modal is opened autoplay it  
	$('#videomodal').on('shown.bs.modal', function (e) {
    
	// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
	$("#video").attr('src',$videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1" ); 
	})
  
  
	// stop playing the youtube video when I close the modal
	$('#videomodal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',$videoSrc); 
	}) 
	});
	
	
	//-- responsive menu swipe -- //
	if (document.documentElement.clientWidth < 768) {
	$(function() {      
	$("body").swipe( {
    swipe:function(event, direction) {
	if (direction =="right" && !$('#offcanvas-menu-home').hasClass("in")) {
   	$('#offcanvas-menu-home').addClass('in');
    $('.offcanvas-toggle.menu-btn-span-bar').addClass('is-open');
	$('body').addClass('offcanvas-stop-scrolling');
	}
	
	
	if (direction =="left") {
    $('#offcanvas-menu-home').removeClass('in');
	$('body').removeClass('offcanvas-stop-scrolling');
    $('.offcanvas-toggle.menu-btn-span-bar').removeClass('is-open');
    }
    },
    threshold: 100,
	excludedElements: "label,pre , button, input, select, textarea, table,.owl-carousel",
    });
  	});
	}
	
	//-- counterUp -- //
	 $('.counter').counterUp({
     delay: 10,
     time: 3000
     });
	 
	 
	//-- Filter List -- //
	function FilterListSection() {
    var input, filter, ul, li, a, i;
    input = document.getElementById('nuhost-filter-input');
    filter = input.value.toUpperCase();
    ul = document.getElementById("nuhost-filter-list");
    li = ul.getElementsByTagName('li');
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
    };   
	
	jQuery('#nuhost-filter-list li a').on('click', function() {
	$(this).addClass("filter-item-open");
	$('.nuhost-filter-list-container').addClass("nuhost-filter-min-height");
	$('#' + this.id + '-content').delay(200).fadeIn(300);
	});
	
	jQuery('.filter-content-close').on('click', function() {
	$(this).addClass("filter-item-open");
	$('.nuhost-filter-list-container').removeClass("nuhost-filter-min-height");
	$('.filter-content-box').delay(200).fadeOut(300);
	});

	
	
	//-- animated scroll -- //
	$(document).on('click', 'a[href^="#"]', function (event) {
		event.preventDefault();
		var nav_height = 0;		
		if ($($.attr(this, 'href')).offset())
		{
			$('html, body').animate({			
				scrollTop: $($.attr(this, 'href')).offset().top - nav_height
			}, 500);
		}
  	});
	
	
	
	
	
	

	