document.addEventListener('DOMContentLoaded', function () {
	let link = document.getElementById('play-btn-id');
	let shadowbox = document.querySelector('.vimeo-shadowbox');
	let closeButton = document.querySelector('.vimeo-shadowbox__close-button');

	link.addEventListener('click', function (event) {
		event.preventDefault(); // Prevent the default behavior of the link
		showPopup();
	});
	closeButton.addEventListener('click', function (event) {
		event.preventDefault(); // Prevent the default behavior of the link
		hidePopup();
	});

	function hidePopup() {
		shadowbox.classList.add('vimeo-shadowbox--hidden');
	}

	// 	// Function to show the video popup
	function showPopup() {
		shadowbox.classList.remove('vimeo-shadowbox--hidden');
	}
});
