/* By Brandio */
 
"use strict";
function checkScreenSize(){
    if (Modernizr.mq('(max-width: 767px)')) {
        $("#main-button").removeClass("hide");
        $("div#main-menu").removeClass("inline-menu");
        $("div#main-menu").addClass("fullpage-menu");
    } else {
        $("#main-button").addClass("hide");
        $("div#main-menu").removeClass("fullpage-menu");
        $("div#main-menu").addClass("inline-menu");
    }
}
$(window).on("load", function() {
    checkScreenSize();
    $(window).on('resize', function(){
        checkScreenSize();
    });
    
    var mainMenuHolder = $(".fullpage-menu .menu-holder");
    mainMenuHolder.css("margin-top",(mainMenuHolder.height()/2)*-1);
    
  	var c=0;
	var words=['Affordable','Amazing','Wonderful','Incredible'];
	function loop(){
  		$('.header-text-1 .word','#top-content').delay(3000).fadeTo(300,0,function(){
     		$(this).text( words[++c%words.length] ).fadeTo(300,1,loop);
  		});
	}    
	loop();
	
    var fullScreenMenu = $("#default-menu");
	$("#default-button").on("click",function(){
		fullScreenMenu.addClass("menu-opened");
		return false;
	});
	$(".close-btn","#default-menu").on("click",function(){
		fullScreenMenu.removeClass("menu-opened");
		return false;
	});
	$(".menu-link","#default-menu").on("click",function(){
		fullScreenMenu.removeClass("menu-opened");
		return false;
	});
	
	var boxOpened=false;
	function openCloseBox(){
		if(!boxOpened){
			openBox();
		}else{
			closeBox();
		}
	}
	
    var box3d = $(".box3d","#features");
    
	box3d.on( "click", openCloseBox );
	
	function openBox(){
			box3d.off( "click", openCloseBox );
			setTimeout(function(){
				boxOpened=true;
				box3d.on( "click", openCloseBox );
			}, 1000);
			$(".box3d-top","#features").addClass("box3d-open");
			setTimeout(function(){
       			$(".feature1","#features").removeClass("inside-box-left");
			}, 400);
			setTimeout(function(){
				$(".feature2","#features").removeClass("inside-box-left");
			}, 500);
			setTimeout(function(){
				$(".feature3","#features").removeClass("inside-box-right");
			}, 600);
			setTimeout(function(){
				$(".feature4","#features").removeClass("inside-box-right");
			}, 700);
			
			return false;
	}
	var closing=false;
	function closeBox(){
			box3d.off( "click", openCloseBox );
			setTimeout(function(){
				boxOpened=false;
				closing=true;
				box3d.on( "click", openCloseBox );
			}, 1000);
			setTimeout(function(){
				$(".box3d-top","#features").removeClass("box3d-open");
			}, 600);
			for(var i=1;i<=4;i++){
				$(".feature-line",".feature"+i).addClass("feature-line-hide");
				$(".feature-star",".feature"+i).addClass("feature-star-hide");
				$("#feature-details"+i).addClass("hide-f-details");
			}
       		$(".feature1","#features").addClass("inside-box-left");
			$(".feature2","#features").addClass("inside-box-left");
			$(".feature3","#features").addClass("inside-box-right");
			$(".feature4","#features").addClass("inside-box-right");
			
			setTimeout(function(){
				closing=false;
			},2000);
			
			return false;
	}
	
    var logoMenu = $('.logo-menu', '#header');
	function setBgToMenuBar(){
		if($(document).scrollTop() > 50){
       		logoMenu.addClass('accent-color-bg');
			if(!closing){
				openBox();
			}
    	} else {
    		logoMenu.removeClass('accent-color-bg');
			logoMenu.removeAttr( "style" );
    	}
	}
	setBgToMenuBar();

	$(document).on("scroll",function(){
    	setBgToMenuBar();
	});
	
	$(".feature-button","#features").on('click',function featureClick(e){
		var buttonNum=$(this).data("num");
		for(var i=1;i<=4;i++){
			if(i==buttonNum){
				$(".feature-line",".feature"+i).removeClass("feature-line-hide");
				$(".feature-star",".feature"+i).removeClass("feature-star-hide");
				$("#feature-details"+i).removeClass("hide-f-details");
			}else{
				$(".feature-line",".feature"+i).addClass("feature-line-hide");
				$(".feature-star",".feature"+i).addClass("feature-star-hide");
				$("#feature-details"+i).addClass("hide-f-details");
			}
		}
		return false;
	});

	$('.people-slider', '#testimonials').on('click', '.person-details', function() {
  		var personNum=$(this).data("num");
		
		$(".testimonial-text", '#testimonials').addClass("testimonial-text-hide");
		$(".t"+personNum,".testimonial-text-holder").removeClass("testimonial-text-hide");
		
		$(".person-details", '#testimonials').removeClass("person-details-show");
		$(this).addClass("person-details-show");
		
		return false;
	});
    
    // Contact form function.
    var form = $('#contactform');
    var formMessages = $('#form-messages');
    var ajaxButton = $('.ajax-button #submit','#contactform');
    var ajaxDone = $('.ajax-button .done','#contactform');
    var ajaxFailed = $('.ajax-button .failed','#contactform');
    
    $(form).submit(function(e) {
        e.preventDefault();
        ajaxButton.addClass('loading');
        var formData = $(form).serialize();
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        }).done(function(response) {
            ajaxButton.addClass("hide-loading");
            ajaxDone.addClass("finish");
            setTimeout(function() {
                ajaxButton.removeClass("loading");
                ajaxButton.removeClass("hide-loading");
                ajaxDone.removeClass("finish");
            }, 2000);
            
            $(formMessages).removeClass('error');
            $(formMessages).addClass('success');
            $(formMessages).text(response);

            $('#name','#contactform').val('');
            $('#email','#contactform').val('');
            $('#message','#contactform').val('');
        }).fail(function(data) {
            ajaxButton.addClass("hide-loading");
            ajaxFailed.addClass("finish");
            setTimeout(function() {
                ajaxButton.removeClass("loading");
                ajaxButton.removeClass("hide-loading");
                ajaxFailed.removeClass("finish");
            }, 2000);
            
            $(formMessages).removeClass('success');
            $(formMessages).addClass('error');

            if (data.responseText !== '') {
                $(formMessages).text(data.responseText);
            } else {
                $(formMessages).text('Oops! An error occured and your message could not be sent.');
            }
        });
    });
});


$('.partners-slider','#partners').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {breakpoint: 1024,settings: {slidesToShow: 5,slidesToScroll: 1,infinite: true,dots: true}},
	{breakpoint: 990,settings: {slidesToShow: 4,slidesToScroll: 1}},
	{breakpoint: 800,settings: {slidesToShow: 3,slidesToScroll: 1}},
    {breakpoint: 600,settings: {slidesToShow: 2,slidesToScroll: 1}},
    {breakpoint: 480,settings: {slidesToShow: 1,slidesToScroll: 1}}
  ]
});


$('.people-slider','#testimonials').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {breakpoint: 1024,settings: {slidesToShow: 4,slidesToScroll: 1,infinite: true,dots: true}},
	{breakpoint: 990,settings: {slidesToShow: 3,slidesToScroll: 1}},
	{breakpoint: 800,settings: {slidesToShow: 3,slidesToScroll: 1}},
    {breakpoint: 600,settings: {slidesToShow: 2,slidesToScroll: 1}},
    {breakpoint: 480,settings: {slidesToShow: 1,slidesToScroll: 1}}
  ]
});

var canvas, stage, exportRoot;

function init() {
	canvas = document.getElementById("logo-canvas");
	exportRoot = new lib.logo();

	stage = new createjs.Stage(canvas);
	stage.addChild(exportRoot);
	stage.update();

	createjs.Ticker.setFPS(lib.properties.fps);
	createjs.Ticker.addEventListener("tick", stage);
}