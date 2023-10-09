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

	fetch('https://vimeo.com/api/oembed.json?url=https://player.vimeo.com/video/871797777')
		.then((response) => {
			if (!response.ok) {
				throw new Error('Network response was not ok');
			}
			return response.json(); // Parse the JSON response
		})
		.then((data) => {
			let videoHtml = data.html;

			// Extract the src attribute from the video HTML
			const parser = new DOMParser();
			const doc = parser.parseFromString(videoHtml, 'text/html');
			const iframeElement = doc.querySelector('iframe');
			const iframeSrc = iframeElement.getAttribute('src');
		})
		.catch((error) => {
			// Handle any errors that occurred during the fetch or processing of the response
			console.error('There was a problem with the fetch operation:', error);
		});
});
