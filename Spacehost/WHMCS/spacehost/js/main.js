/*------------------------------------------------------------------
 * Theme Name: Spacehost Responsive Template
 * Theme URI: http://www.brandio.io/envato/spacehost
 * Author: Brandio
 * Author URI: http://www.brandio.io/
 * Description: A Bootstrap Responsive HTML5 Template
 * Version: 1.0
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2017 Brandio.
 -------------------------------------------------------------------*/

"use strict";

// Add Slider function to "partners-slider" div in "partners" section. 
$(".partners-slider","#partners").slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 7,
  slidesToScroll: 1,
  responsive: [
    {breakpoint: 1024,settings: {slidesToShow: 5,slidesToScroll: 1}},
	{breakpoint: 990,settings: {slidesToShow: 4,slidesToScroll: 1}},
	{breakpoint: 800,settings: {slidesToShow: 3,slidesToScroll: 1}},
    {breakpoint: 600,settings: {slidesToShow: 2,slidesToScroll: 1}},
    {breakpoint: 480,settings: {slidesToShow: 1,slidesToScroll: 1}}
  ]
});
$(window).on("load", function() {
    // Contact form function.
    var form = $('#contactform');
    var formMessages = $('#form-messages');
    var ajaxButton = $('.ajax-button','#contactform');
    
    $(form).submit(function(e) {
        e.preventDefault();
        ajaxButton.addClass('sending');
        var formData = $(form).serialize();
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        }).done(function(response) {
            ajaxButton.removeClass('sending');
            $(formMessages).removeClass('error');
            $(formMessages).addClass('success');
            $(formMessages).text(response);

            $('#name','#contactform').val('');
            $('#email','#contactform').val('');
            $('#message','#contactform').val('');
        }).fail(function(data) {
            ajaxButton.removeClass('sending');
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