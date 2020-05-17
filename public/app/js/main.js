$( function() {
	'use strict';
	// Nav Bar Active Class
	$('.navbar-nav .nav-item').on('click' , function () {
		$(this).addClass('active').siblings().removeClass('active');
	});
});