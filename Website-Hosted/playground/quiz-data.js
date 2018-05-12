var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');
var submitButton = document.getElementById('submit');

var myQuestions = [
	{
		question: "Returns an Enumeration containing the names of the attributes available to this request.",
		answers: {
			x: ''
		},
		correctAnswer: 'getAttributeNames()'
	},
	{
		question: "Returns an Enumeration of String objects containing the names of the parameters contained in this request.",
		answers: {
			x: ''
		},
		correctAnswer: 'getParameterNames()'
	}
];

generateQuiz(myQuestions, quizContainer, resultsContainer, submitButton);

function generateQuiz(questions, quizContainer, resultsContainer, submitButton){

	function showQuestions(questions, quizContainer){
		var output = [];
		var answers;

		for(var i=0; i<questions.length; i++){
			answers = [];

			for(letter in questions[i].answers){
				answers.push(
					'<div class="cus-answer-container">' +
					'<label class="q-label">' + '&nbsp; <h5>Answer: </h5>' +
						'<input class="q-input" type="text" name="question'+i+'"">' +
					'</label>' +
					'</div>'
				);
			}

			output.push(
				'<div class="slide">' +
					'<span class="glyphicon glyphicon-question-sign"></span> &nbsp;' +
					'<div class="question">' + questions[i].question + '</div>' +
					'<div class="answers">' + answers.join('') + '</div>' +
				'</div>'
			);
		}
		quizContainer.innerHTML = output.join('');
	}


	function showResults(questions, quizContainer, resultsContainer){
		var answerContainers = quizContainer.querySelectorAll('.answers');
		var userAnswer = '';
		var correctAnswers = 0;
		
		for(var i=0; i<questions.length; i++){
			userAnswer = (answerContainers[i].querySelector('input[name=question'+i+']')||{}).value;
			if(userAnswer==questions[i].correctAnswer){
				correctAnswers++;
				answerContainers[i].style.color = 'lightgreen';
			}
			else{
				answerContainers[i].style.color = 'red';
			}
		}
		
		resultsContainer.innerHTML = 'You got ' + correctAnswers + ' out of ' + questions.length;
	}
	
	showQuestions(questions, quizContainer);
	submitButton.onclick = () => { showResults(questions, quizContainer, resultsContainer); }
}

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