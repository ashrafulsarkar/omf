; (function ($) {
	"use strict";
	/*****************
	 * sticky
	 ****************/


	$(".mobile_nav_btn").on('click', function () {
		$(".mobile_nav_btn").toggleClass("d-none");
		$("header").toggleClass("mobile_nav_active");
	});

	let lastScrollTop = 0;
	$(window).on('scroll', function () {
		var scroll = $(this).scrollTop();
		if (scroll < 245) {
			$(".header-sticky").removeClass("sticky");
		} else {
			$(".header-sticky").addClass("sticky");

			if (scroll > lastScrollTop){
				$(".header-sticky").addClass("hide-sticky");
			}else {
				$(".header-sticky").removeClass("hide-sticky");
			}
		}
		lastScrollTop = scroll;
	});

	/*****************
	 * scrollToTop
	 ****************/
	if ( !omf_scrolltop.active == false ) {
		$.scrollUp({
			scrollName: 'scrolltotop',
			topDistance: '300',
			topSpeed: 300,
			animation: 'fade',
			animationInSpeed: 200,
			animationOutSpeed: 200,
			scrollText: '<i class="fa-solid fa-angle-up"></i>', 
			activeOverlay: false,
		});
	}
})(jQuery);