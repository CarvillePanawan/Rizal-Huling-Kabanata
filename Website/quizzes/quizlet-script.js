var submitButton = document.getElementById('submit');
var prev = document.getElementById("previous");
var next = document.getElementById("next");
var slides = document.querySelectorAll(".slide");
var currentSlide = 0;

function showSlide(n) {
	slides[currentSlide].classList.remove('active-slide');
	slides[n].classList.add('active-slide');
	
	currentSlide = n;
	
	if(currentSlide==0) {
		prev.style.display = 'none';
	} else {
		prev.style.display = 'inline-block';
	}
	
	if(currentSlide==slides.length-1) {
		next.style.display = 'none';
		submitButton.style.display = 'inline-block';
	} else {
		next.style.display = 'inline-block';
		submitButton.style.display = 'none';
	}
}

showSlide(0);

next.onclick = () => { showSlide(currentSlide + 1); }
prev.onclick = () => { showSlide(currentSlide - 1); }