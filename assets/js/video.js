// Select your Vimeo video element using its iframe
let iframe = document.querySelector('iframe');

// Create a Vimeo Player instance
let player = new Vimeo.Player(iframe);

// Select your play button, shadowbox, and close button
let link = document.querySelector('.play-btn');
let shadowbox = document.querySelector('.vimeo-shadowbox');
let closeButton = document.querySelector('.vimeo-shadowbox__close-button');

// Add an event listener for when the video ends
player.on('ended', function () {
	hidePopup();
});

// Add an event listener for when the play button is clicked
link.addEventListener('click', function (event) {
	event.preventDefault(); // Prevent the default behavior of the link
	showPopup();
});

// Add an event listener for when the shadowbox background is clicked
shadowbox.addEventListener('click', function (event) {
	if (event.target === shadowbox) {
		hidePopup();
	}
});

// Add an event listener for when the close button is clicked
closeButton.addEventListener('click', function (event) {
	event.preventDefault(); // Prevent the default behavior of the link
	hidePopup();
});

// Function to show the video popup
function showPopup() {
	player.play().catch(function (error) {
		console.error('Error playing the video:', error);
	});
	shadowbox.classList.remove('vimeo-shadowbox--hidden');
}

// Function to hide the video popup
function hidePopup() {
	player.pause().catch(function (error) {
		console.error('Error pausing the video:', error);
	});
	shadowbox.classList.add('vimeo-shadowbox--hidden');
}
