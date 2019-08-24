jQuery( document ).ready( function( $ ) {
 	$('.settingbutton').on('click', function(){
    if($(this).hasClass('no_active')){
        $(this).removeClass('no_active').addClass('active');
		$(".nuhost-template-demo").animate({"right": "-250px"}, 100);
    }else{
        $(this).addClass('no_active');
		$(".nuhost-template-demo").animate({"right": "0px"}, 100);
    }
    });
	 $(".nuhost-template-header-styles-demo a").on("click", function (e)
   {
        e.preventDefault();
        var color = $(this).attr("href");
        $(".nuhost-template-header-styles-demo a").removeClass("active");
        $(this).addClass("active");
      });
			$("#first-demo-style").click(function() {
			$("#header").removeClass('green-linear-background-header purple-linear-background-header blue-linear-background-header green-two-linear-background-header purple-two-linear-background-header');
            $("#header").addClass('simple');
			});

			$("#second-demo-style").click(function() {
			$("#header").removeClass('purple-linear-background-header blue-linear-background-header green-two-linear-background-header purple-two-linear-background-header');
            $("#header").addClass('green-linear-background-header');
			});

			$("#third-demo-style").click(function() {
			$("#header").removeClass('green-linear-background-header blue-linear-background-header green-two-linear-background-header purple-two-linear-background-header');
            $("#header").addClass('purple-linear-background-header');
			});

			$("#fourth-demo-style").click(function() {
			$("#header").removeClass('green-linear-background-header purple-linear-background-header green-two-linear-background-header purple-two-linear-background-header');
            $("#header").addClass('blue-linear-background-header');
			});

			$("#fiveth-demo-style").click(function() {
			$("#header").removeClass('green-linear-background-header purple-linear-background-header blue-linear-background-header  purple-two-linear-background-header');
            $("#header").addClass('green-two-linear-background-header');
			});

			$("#sixth-demo-style").click(function() {
			$("#header").removeClass('green-linear-background-header purple-linear-background-header blue-linear-background-header green-two-linear-background-header');
            $("#header").addClass('purple-two-linear-background-header');
			});

    } );