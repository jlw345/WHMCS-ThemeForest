jQuery(function($){
	var canBeLoaded = true, // this param allows to initiate the AJAX call only if necessary
	    bottomOffset = 2000; // the distance (in px) from the page bottom when you want to load more posts
	console.log('document height: '+$(document).height());
	console.log('document height: '+$(document).height()*0.9);
	$(window).scroll(function(){
		var data = {
			'action': 'loadmore',
			'query': akd_loadmore_params.posts,
			'page' : akd_loadmore_params.current_page
		};
		
		
		if( $(document).scrollTop() > ( $(document).height() - ($(document).height()*0.9) ) && canBeLoaded == true ){
			$.ajax({
				url : akd_loadmore_params.ajaxurl,
				data:data,
				type:'POST',
				beforeSend: function( xhr ){
					// you can also add your own preloader here
					// you see, the AJAX call is in process, we shouldn't run it again until complete
					canBeLoaded = false; 
				},
				success:function(data){
					if( data ) {
						$('#main').append( data ); // where to insert posts
						canBeLoaded = true; // the ajax is completed, now we can run it again
						akd_loadmore_params.current_page++;
					}
				}
			});
		}
	});
});