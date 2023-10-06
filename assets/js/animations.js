//NavBar Selector
const container = document.querySelector('.navbar__menu');
const navLinks = container.querySelectorAll('.menu-item a');

//heading Form and header
const form = document.getElementById('form-container');
const headerText = document.getElementById('header-text');
const navLogo = document.getElementById('nav-logo');

//rental section selectors
const rentals = document.getElementById('rentals');
const rentalCarousel = document.getElementById('carousel-container');

//about selectors
const aboutUs = document.getElementById('about-us');
const aboutText = document.getElementById('about-us-text');

//services selectors
const serviceSection = document.getElementById('services');
const services = document.querySelectorAll('.service-container');

//numbers
const numberContainers = document.querySelectorAll('.number');
const numberSection = document.getElementById('numbers');

//initialise numbers played(numbers section)
let numbersAnimationPlayed = false; // Flag to track if the numbers animation has played
const targetValues = [20, 100, 10, 50]; //final values for the numbers
//creat the limeline
const tl = gsap.timeline();

// Set the initial positions for the animations
gsap.set(form, { y: 300, opacity: 0 });
gsap.set(headerText, { y: -400, opacity: 0 });
gsap.set(navLogo, { x: -300, opacity: 0 });
gsap.set(rentalCarousel, { y: 300, opacity: 0 });
gsap.set(aboutText, { opacity: 0 });

// Animations to be played together in the header
const initialAnimations = [
	gsap.to(form, { duration: 1.5, y: 0, ease: 'power2.out', opacity: 1 }),
	gsap.to(headerText, { duration: 1.5, y: 0, ease: 'power2.out', opacity: 1 }),
	gsap.to(navLogo, { duration: 1.5, x: 0, opacity: 1 }),
];

// Hover animations for the main navbar
navLinks.forEach((link) => {
	link.addEventListener('mouseover', () => {
		tl.to(link, { duration: 0.1, color: '#1089ff', opacity: 1 });
	});

	link.addEventListener('mouseleave', () => {
		tl.to(link, { duration: 0.1, color: '#fff', opacity: 1 });
	});
});

// Add initial animations to the timeline
tl.add(initialAnimations);

//check if the section is in viewport
function isInViewport(element) {
	if (element && element instanceof HTMLElement) {
		const elementTop = element.getBoundingClientRect().top;
		const elementBottom = element.getBoundingClientRect().bottom;
		const viewportHeight = window.innerHeight || document.documentElement.clientHeight;
		const threshold = 0.6;
		return elementTop < (1 - threshold) * viewportHeight && elementBottom > threshold * viewportHeight;
	} else {
		// Handle the case where the element is not defined or not an HTMLElement
		return false; // or any other appropriate behavior
	}
}

// Function to handle section animations by section
function handleSectionAnimations() {
	if (isInViewport(aboutUs) || isInViewport(rentals) || isInViewport(rentalCarousel)) {
		gsap.to(rentalCarousel, { duration: 1.5, y: 0, ease: 'power2.out', opacity: 1 });
	}
	if (isInViewport(serviceSection) || isInViewport(aboutUs) || isInViewport(aboutText)) {
		gsap.to(aboutText, { duration: 1.5, opacity: 1 });
	}
	if (isInViewport(serviceSection) || isInViewport(services)) {
		services.forEach((container, index) => {
			const animation = gsap.timeline();
			animation.to(container, {
				opacity: 1,
				transform: 'translateY(0)',
				duration: 0.5,
				delay: index * 0.3,
			});
		});
	}

	if (isInViewport(numberSection) && !numbersAnimationPlayed) {
		console.log('number');

		// Animate each number separately
		numberContainers.forEach((container, index) => {
			const targetValue = targetValues[index]; // Get the target value for this number

			// Animate the number using GSAP and update it as a whole number
			gsap.to(
				{ value: null }, // Create an object with a 'value' property
				{
					value: targetValue, // Set the target value
					duration: 4, // Duration of the animation (adjust as needed)
					ease: 'power4.out', // Easing function (adjust as needed)
					onUpdate: function () {
						// Update the number as a whole number during the animation
						updateNumber(container, this.targets()[0].value);
					},
					onComplete: () => {
						// Animation complete callback
						container.innerHTML = Math.round(targetValue); // Set the container's innerHTML to the rounded value
					},
				}
			);
		});
		numbersAnimationPlayed = true; // Set the flag to indicate that the animation has played
	}
}

// Function to update the displayed numbers as whole numbers
function updateNumber(container, value) {
	container.innerHTML = Math.round(value); // Round the value to the nearest integer
}

// Add a scroll event listener to check for section animations
window.addEventListener('scroll', handleSectionAnimations);
// Call handleSectionAnimations once on page load to check initial positions
handleSectionAnimations();
