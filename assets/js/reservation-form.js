const reservationForm = document.getElementById('reservation_form');
const successOverlay = document.getElementById('success-overlay');

reservationForm.addEventListener('submit', (e) => {
	e.preventDefault();

	const pickUpLocation = reservationForm.querySelector('[name="pick-up-loaction"]');
	const dropOffLocation = reservationForm.querySelector('[name="drop-off-location"]');
	const pickUpDate = reservationForm.querySelector('[name="pick-up-date"]');
	const dropOffDate = reservationForm.querySelector('[name="drop-off-date"]');
	const pickUpTime = reservationForm.querySelector('[name="pick-up-time"]');

	// Create an object to map field names to messages
	const emptyFieldMessages = {
		'pick-up-loaction': 'Pick-up Location is required.',
		'drop-off-location': 'Drop-off Location is required.',
		'pick-up-date': 'Pick-up Date is required.',
		'drop-off-date': 'Drop-off Date is required.',
		'pick-up-time': 'Pick-up Time is required.',
	};

	// Create an array to store the error messages for empty fields
	const errorMessages = [];

	if (pickUpLocation.value.length === 0) {
		errorMessages.push(emptyFieldMessages['pick-up-loaction']);
		pickUpLocation.placeholder = emptyFieldMessages['pick-up-loaction'];
		pickUpLocation.classList.add('error-message'); // Add the error message class
	}
	if (dropOffLocation.value.length === 0) {
		errorMessages.push(emptyFieldMessages['drop-off-location']);
		dropOffLocation.placeholder = emptyFieldMessages['drop-off-location'];
		dropOffLocation.classList.add('error-message'); // Add the error message class
	}
	if (pickUpDate.value.length === 0) {
		errorMessages.push(emptyFieldMessages['pick-up-date']);
		pickUpDate.placeholder = emptyFieldMessages['pick-up-date'];
		pickUpDate.classList.add('error-message'); // Add the error message class
	}
	if (dropOffDate.value.length === 0) {
		errorMessages.push(emptyFieldMessages['drop-off-date']);
		dropOffDate.placeholder = emptyFieldMessages['drop-off-date'];
		dropOffDate.classList.add('error-message'); // Add the error message class
	}
	if (pickUpTime.value.length === 0) {
		errorMessages.push(emptyFieldMessages['pick-up-time']);
		pickUpTime.placeholder = emptyFieldMessages['pick-up-time'];
		pickUpTime.classList.add('error-message'); // Add the error message class
	}

	// Check if the form is valid and all fields are filled correctly
	const isValid = errorMessages.length === 0;

	if (isValid) {
		// Show the success overlay
		successOverlay.style.display = 'flex';

		// Optionally, you can reset the form or perform other actions here
	}
});
