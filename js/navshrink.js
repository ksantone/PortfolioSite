$(window).scroll(function() {
		if($(document).scrollTop() > 300) {
			$('.navbar').addClass('shrink').removeClass('big-nav');
		}
		else {
			$('.navbar').removeClass('shrink').addClass('big-nav');
		}
});