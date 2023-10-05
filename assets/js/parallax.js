const parallaxImage = document.getElementById('parallax-box');
window.addEventListener('scroll', () => {
	let scrollPosition = window.scrollY;
	// Adjust the translateY value to control the parallax effect
	parallaxImage.style.transform = `translateY(${scrollPosition * 0.25}px)`;
});
