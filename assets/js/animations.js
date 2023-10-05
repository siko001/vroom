const container = document.querySelector('.navbar__menu');
const navLinks = container.querySelectorAll('.menu-item a');
const form = document.getElementById('form-container');
const headerText = document.getElementById('header-text');
const navLogo = document.getElementById('nav-logo');
const rentals = document.getElementById('rentals');
const rentalCarousel = document.getElementById('carousel-container');
const aboutUs = document.getElementById('about-us');
const aboutText = document.getElementById('about-us-text');

const tl = gsap.timeline();

// Set the initial positions for the animations
gsap.set(form, { y: 300 });
gsap.set(headerText, { y: -400 });
gsap.set(navLogo, { x: -300 });
gsap.set(rentalCarousel, { y: 300 });
gsap.set(aboutText, { opacity: 0 });

// Animations to be played together in the header
const initialAnimations = [
	gsap.to(form, { duration: 1.5, y: 0, ease: 'power2.out' }),
	gsap.to(headerText, { duration: 1.5, y: 0, ease: 'power2.out' }),
	gsap.to(navLogo, { duration: 1.5, x: 0 }),
];

// Hover animations for the main navbar
navLinks.forEach((link) => {
	link.addEventListener('mouseover', () => {
		console.log('mouse over');
		tl.to(link, { duration: 0.1, color: '#1089ff' });
	});

	link.addEventListener('mouseleave', () => {
		tl.to(link, { duration: 0.1, color: '#fff' });
	});
});

// Add initial animations to the timeline
tl.add(initialAnimations);

// Function to check if an element is in the viewport
function isInViewport(element) {
	const rect = element.getBoundingClientRect();
	return (
		rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
		rect.right <= (window.innerWidth || document.documentElement.clientWidth)
	);
}

// Function to handle section animations
function handleSectionAnimations() {
	if (isInViewport(rentals)) {
		gsap.to(rentalCarousel, { duration: 1.5, y: 0, ease: 'power2.out' });
	}
	if (isInViewport(aboutUs)) {
		gsap.to(aboutText, { duration: 1.5, opacity: 1, ease: 'power2.out' });
	}
	// Add more sections and animations here as needed
}

// Add a scroll event listener to check for section animations
window.addEventListener('scroll', handleSectionAnimations);

// Call handleSectionAnimations once on page load to check initial positions
handleSectionAnimations();
