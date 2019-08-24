/* Template: Zionhost Theme | Author: Fluent-Themes */
/*----------------------------------------------------------*/
(function($) {

"use strict";

jQuery(document).ready(function($){
    // Contact Form ajax

    var eForm = jQuery('#contact-form');
    var spinner = jQuery('.spinner');

    eForm.find('#submit').on('click', function(e){
        e.preventDefault();
        jQuery('#contactsMsgs').html('');
        spinner.show();
        var errmsg;
        errmsg = '';

        if(errmsg){
            jQuery('#contactsMsgs').html('<p class="nc-response">' + errmsg + '</p>');
            spinner.hide();
        }else{
            
            var url = eForm.attr('action');
            
            var data = eForm.serialize();
                   
            jQuery.ajax({
                url: url,
                method: 'POST',
                data: data,
                error: function(data) {
					var $error_while_ajax_request = prefix_object_name.error_while_ajax_request;
                    jQuery('#contactsMsgs').html('<p class="nc-response">'+ $error_while_ajax_request +'</p>');
                    spinner.hide();
                },
                success : function(data){
					var $thank_you_your_email_has_been_sent = prefix_object_name.thank_you_your_email_has_been_sent;
					var $please_try_again = prefix_object_name.please_try_again;
                    if (data.status == 'success') {
                        jQuery('#contactsMsgs').html('<p class="icon-ok mc-response">'+ $thank_you_your_email_has_been_sent +'</p>');
                        eForm.find("input[type=text], textarea").val("");
                    }else{
						jQuery('#contactsMsgs').html('<p class="nc-response">'+ $please_try_again +'</p>');
                    }
                    spinner.hide();
                    //closeParentBtn();
                }
            });
            
        }

    });
	
	//Styling sidebar widgets
	jQuery('.right_sidebar .widget_categories > ul').addClass('list');
	jQuery('.right_sidebar .widget_recent_entries > ul').addClass('list');
	jQuery('.right_sidebar .widget_archive > ul').addClass('list');
	jQuery('.right_sidebar .widget_meta > ul').addClass('list');
	jQuery('.right_sidebar .widget_pages > ul').addClass('list');
	jQuery('.right_sidebar .widget_recent_comments > ul').addClass('list');	
	jQuery('.left_sidebar .widget_categories > ul').addClass('list');
	jQuery('.left_sidebar .widget_recent_entries > ul').addClass('list');
	jQuery('.left_sidebar .widget_archive > ul').addClass('list');
	jQuery('.left_sidebar .widget_meta > ul').addClass('list');
	jQuery('.left_sidebar .widget_pages > ul').addClass('list');
	jQuery('.left_sidebar .widget_recent_comments > ul').addClass('list');
	jQuery('.tagcloud').addClass('tags').removeClass('tagcloud');
	jQuery('.widget_search').addClass('sidebar_search').removeClass('widget_search');
	jQuery('.widget_calendar').addClass('sidebar_search').removeClass('widget_calendar');
});
}(jQuery));