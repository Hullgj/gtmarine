$(document).ready(function() {
	$('#about-us').on('click',function(event) {
		event.preventDefault();
		$('.dropdown-menu').toggleClass('show');
	});
	
	$('#navbar-button').on('click',function() {
		$('#navbar').toggleClass('show text-center');
	});
}); 