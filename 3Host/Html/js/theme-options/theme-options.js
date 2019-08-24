// THEME OPTIONS.JS
//--------------------------------------------------------------------------------------------------------------------------------
//This is JS file that contains principal fuctions of theme */
// -------------------------------------------------------------------------------------------------------------------------------
// Template Name: 
// Author: Iwthemes.
// Name File: theme-options.js
// Version 1.0 - http://themeforest.net/user/iwthemes/portfolio
// Website: http://www.iwthemes.com 
// Email: support@iwthemes.com
// Copyright: (C) 2016
// -------------------------------------------------------------------------------------------------------------------------------

$(document).ready(function(){
    
  	/* Selec your skin and layout Style */
	function interface(){

    // Skin value
    var skin = "green"; //blue, green, magenta-dark, orange, yellow 

    // Boxed value
    var layout = "layout-wide"; // layout-boxed, layout-boxed-margin ,layout-wide, layout-boxed-wide

    //Only in boxed version 
    var bg = "bg2";  // none (default), bg1, bg2, bg3, bg4, bg5, bg6, bg7, bg8, bg9, bg10, bg11 

    // Theme Panel - disable panel options
    var themepanel = "1"; // 1 (default - enable), 0 ( disable)

    $(".skin").attr("href", "css/skins/"+ skin + "/" + skin + ".css");
    $("#layout").addClass(layout);	
    $("body").addClass(bg);   
    $("#theme-options").css('opacity' , themepanel);
    return false;
  }
  interface();

	//=================================== Theme Options ====================================//
	$('.wide').click(function() {
		$('.boxed').removeClass('active');
		$('.boxed-margin').removeClass('active');
		$('.boxed-wide').removeClass('active');
		$(this).addClass('active');
		$('#layout').removeClass('layout-boxed-wide').removeClass('layout-boxed').removeClass('layout-boxed-margin').addClass('layout-wide');
	});
	$('.boxed').click(function() {
		$('.wide').removeClass('active');
		$('.boxed-margin').removeClass('active');
		$('.boxed-wide').removeClass('active');
		$(this).addClass('active');
		$('#layout').removeClass('layout-boxed-wide').removeClass('layout-boxed-margin').removeClass('layout-wide').addClass('layout-boxed');
	});
	$('.boxed-margin').click(function() {
		$('.boxed').removeClass('active');
		$('.wide').removeClass('active');
		$('.boxed-wide').removeClass('active');
		$(this).addClass('active');
		$('#layout').removeClass('layout-boxed-wide').removeClass('layout-wide').removeClass('layout-boxed').addClass('layout-boxed-margin');
	});
	$('.boxed-wide').click(function() {
		$('.boxed').removeClass('active');
		$('.boxed-margin').removeClass('active');
		$('.wide').removeClass('active');
		$(this).addClass('active');
		$('#layout').removeClass('layout-wide').removeClass('layout-boxed').removeClass('layout-boxed-margin').addClass('layout-boxed-wide');
	});

	//=================================== Skins Changer ====================================//
    // Color changer
	$(".blue").click(function(){
	    $(".skin").attr("href", "css/skins/blue/blue.css");
	    return false;
	});
	$(".yellow").click(function(){
	    $(".skin").attr("href", "css/skins/yellow/yellow.css");
	    return false;
	});
	$(".green").click(function(){
	    $(".skin").attr("href", "css/skins/green/green.css");
	    return false;
	});
	$(".orange").click(function(){
    	$(".skin").attr("href", "css/skins/orange/orange.css");
    	return false;
	});
	$(".magenta_dark").click(function(){
	    $(".skin").attr("href", "css/skins/magenta-dark/magenta-dark.css");
	    return false;
	});

	//=================================== Background Options ====================================//
	$('#theme-options ul.backgrounds li').click(function(){
	var 	$bgSrc = $(this).css('background-image');
		if ($(this).attr('class') == 'bgnone')
			$bgSrc = "none";

		$('body').css('background-image',$bgSrc);
		$.cookie('background', $bgSrc);
		$.cookie('backgroundclass', $(this).attr('class').replace(' active',''));
		$(this).addClass('active').siblings().removeClass('active');
	});
	$('body').addClass('position-background');

	//=================================== Panel Options ====================================//
	$('.openclose').click(function(){
		if ($('#theme-options').css('right') == "-222px")
		{
			$right = "0";
			$.cookie('displayoptions', "0");
		} else {
			$right = "-222px";
			$.cookie('displayoptions', "1");
		}
		$('#theme-options').animate({
			right: $right
		},{
			duration: 500			
		});

	});

    $('#theme-options').fadeIn();
    $bgSrc = $.cookie('background');
    $('body').css('background-image',$bgSrc);

    if ($.cookie('displayoptions') == "1")
    {
        $('#theme-options').css('right','-222px');
    } else if ($.cookie('displayoptions') == "0") {
        $('#theme-options').css('right','0');
    } else {
        $('#theme-options').delay(800).animate({
            right: "-222px"
        },{
            duration: 500				
        });
        $.cookie('displayoptions', "1");
    }
    $('#theme-options ul.backgrounds').find('li.' + $.cookie('backgroundclass')).addClass('active');

}); 