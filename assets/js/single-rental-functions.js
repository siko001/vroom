const bookcar = () => {
	const bookingOverLay = document.getElementsByClassName('booking-overlay')[0];
	const bookingBtns = document.getElementsByClassName('single-btn');

	if (bookingOverLay) {
		bookingOverLay.classList.add('show');

		for (const btn of bookingBtns) {
			btn.classList.add('disabled');
			btn.disabled = true;
		}
	}
};

const closeOverlay = () => {
	const overlays = document.getElementsByClassName('single-overlay');

	for (const overlay of overlays) {
		overlay.classList.remove('show'); // Assuming 'show' is the class that displays the overlay
	}
};

const showDetails = () => {
	const detailsOverlay = document.getElementsByClassName('details-overlay')[0];

	if (detailsOverlay) {
		detailsOverlay.classList.add('show');
	}
};
