jQuery(document).ready(function ($) {
	$('.owl-carousel').owlCarousel({
		center: true,
		margin: 10,
		loop: true,
		autoplay: true, //autoplay
		autoplayTimeout: 2500, //auto play speed
		autoplayHoverPause: true, //on hover stop
		responsive: {
			100: {
				items: 1, //100px-1000px
			},
			1300: {
				items: 3, //1000+
			},
		},
	});
});
