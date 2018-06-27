$(window).scroll(function() {
		if($(document).scrollTop() > 300) {
			$('.navbar-brand, .navbar-toggle, .navbar-nav').addClass('shrink').removeClass('big-nav');
		}
		else {
			$('.navbar-brand, .navbar-toggle, .navbar-nav').removeClass('shrink').addClass('big-nav');
		}
});