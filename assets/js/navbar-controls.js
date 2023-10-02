jQuery(document).ready(function ($) {
	//Give the navbar the active color

	//Check to see if url ends with "#home"
	function isHomePage() {
		const url = window.location.href;
		return url.endsWith('#home') || url === window.location.origin + '/';
	}
	// Add 'current-menu-item' class to the 'Home' menu item when the page loads
	if (isHomePage()) {
		$('.navbar__menu .menu-item a[href="#home"]').parent('li').addClass('current-menu-item');
	}

	$('.navbar__menu li').click(function () {
		// Remove the 'current-menu-item' class from all menu items
		$('.navbar__menu li').removeClass('current-menu-item');
		// Add the 'current-menu-item' class to the clicked link's parent li
		$(this).addClass('current-menu-item');
	});

	// Open the overlay
	$('.mobile-nav__menu').click(() => {
		if (!$('.overlay').hasClass('active')) {
			$('.overlay').addClass('active');
		} else {
			$('.overlay').removeClass('active');
		}
	});

	// Close The overlay
	$('.navbar__close').click(() => {
		if ($('.overlay').hasClass('active')) {
			$('.overlay').removeClass('active');
		}
	});
});
