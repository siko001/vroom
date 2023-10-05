jQuery(document).ready(function ($) {
	//Give the navbar the active color

	function setActiveNavLink() {
		const url = window.location.href;
		const fragmentIdentifier = url.split('#')[1];

		// Remove the 'current-menu-item' class from all menu items
		$('.navbar__menu li').removeClass('current-menu-item');

		// Add the 'current-menu-item' class to the corresponding link
		if (fragmentIdentifier) {
			const matchingLink = $('.navbar__menu .menu-item a[href="#' + fragmentIdentifier + '"]');
			matchingLink.parent('li').addClass('current-menu-item');
		}
	}

	// Call the function to set the active link on page load
	$(document).ready(function () {
		setActiveNavLink();
	});

	// Listen to changes in the URL hash (e.g., when the user clicks on a link with a fragment identifier)
	window.addEventListener('hashchange', setActiveNavLink);

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
