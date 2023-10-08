jQuery(document).ready(function ($) {
	// Function to set the active link and add fragment identifier to the URL
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
	setActiveNavLink();

	// Smooth scroll when clicking on navigation links
	$('a[href^="#"]').click(function (e) {
		e.preventDefault();

		const targetId = $(this).attr('href'); // Get the href attribute
		const $target = $(targetId); // Select the target element

		if ($target.length) {
			$('html, body').animate(
				{
					scrollTop: $target.offset().top,
				},
				1000
			); // Adjust the duration as needed
		}

		// Update the URL with the fragment identifier
		history.pushState(null, null, targetId);

		// Set the active navigation link
		setActiveNavLink();
	});

	// Open the overlay
	$('.mobile-nav__menu').click(() => {
		$('.overlay').toggleClass('active');
	});

	// Close the overlay
	$('.navbar__close').click(() => {
		$('.overlay').removeClass('active');
	});
});
