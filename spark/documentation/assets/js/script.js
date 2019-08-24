$(document).ready(function() {
	$('.nav').onePageNav();

	$('.dropdown').on('click', function() {
		$this = $(this);
		$this.next('.sub').slideToggle(300);
	});
});