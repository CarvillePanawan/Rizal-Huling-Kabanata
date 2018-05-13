<!Doctype>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Webtech Finals</title>
        <link rel="stylesheet" type="text/css" href="../css/topics.css">
        <link rel="stylesheet" type="text/css" href="../css/fonts.css">
        <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/quiz.css">
        <link rel="stylesheet" href="quizlet-style.css">
        <script src="quizlet-script.js" async></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-a">
            <div class="header">
                <div class="header-left">
                    <a href="../index.html">
                    <img id="header-img" src="../../images/header.png" alt="website header">
                    </a>
                    <input id="search-bar" type="text" placeholder="Search">
                    <button id="search-btn"></button>
                </div>
                <ul class="nav-a">
                    <li class="dropdown">
                        <span class="dropdown-toggle" data-toggle="dropdown" href="#">User
                        <span class="caret"></span></span>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <h6 class="dropdown-header">Logged in as:</h6>
                            <div class="dropdown-divider"></div>
                            <li><a href="">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="container">
                    <div class="jumbotron banner">
                        <h3>Java</h3>
                        <p>Javascript is a client-side programming language that used to make web pages interactive within the browser. Javascript allows you to access and modify contents of a web page while being viewed.</p>
                    </div>
                </div>
                <div class="nav-custom">
                    <ul class="nav-a">
                        <li><button type="button" class="top-btn" data-toggle="modal" data-target="#lb-modal">Leaderboard</button></li>
                    </ul>
                </div>
                <div id="lb-modal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Leaderboard</h4>
                            </div>
                            <div class="modal-body">
                                <div class="board">
                                    <div class='row lb_row'>
                                        <div class='col-md-4 text-center'>Name</div>
                                        <div class='col-md-4 text-center'>Score</div>
                                        <div class='col-md-4 text-center'>Date</div>
                                    </div>
                                    <?php include "leaderboard.php"; ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container container-1">
                    <div class="t-container">
                        <div class="quiz-container">
                            <div id="quiz">
                                <form action="pq-res.php" method="post">
                                    <div class="slide active-slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">1. Who is the creator of PHP?</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer1" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer1" id="answer1" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">2. What does PHP originally stand for?</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer2" class="q-label">
				&nbsp; 
				<h5>Answer: Is PHP a client-side programming language or server-side programming language?
 Server-side</h5>
				<input name="answer2" id="answer2" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">3. Is PHP a client-side programming language or server-side programming language? </div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer3" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer3" id="answer3" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">4. Where do PHP script run?</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer4" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer4" id="answer4" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">5. These are special variables that is built into PHP and available throughout an entire script. </div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer5" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer5" id="answer5" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">6. It is a container that you can store data in.</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer6" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer6" id="answer6" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">7. This involves sticking more than one string together to form a new string.</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer7" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer7" id="answer7" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">8. It is use to identify users and web browsers which is done by the web server.</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer8" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer8" id="answer8" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">9. It is an application for delivering web pages that serves as the server-side of web applications.</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer9" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer9" id="answer9" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">10. A type of PHP data storage that allow you to store in multiple pieces of information.</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer10" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer10" id="answer10" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">11. All PHP scripts outputs HTML code.(True/Falls)</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer11" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer11" id="answer11" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">12. You don't need a web server to run PHP scripts.(True/Falls)</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer12" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer12" id="answer12" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">13. It is legal to put both PHP and HTML code in the same file.(True/Falls)</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer13" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer13" id="answer13" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">14. The $_POST is considered to be a superglobal.(True/Falls)</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer14" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer14" id="answer14" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">15. PHP variables can store any kinds of data.(True/Falls)</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer15" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer15" id="answer15" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">16. Escape Characters in PHP starts with (/).(True/Falls)</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer16" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer16" id="answer16" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">17. To start a session in PHP, use the statement session_start();.(True/Falls)</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer17" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer17" id="answer17" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">18. echo is a PHP command that outputs content as pure text only.(True/Falls)</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer18" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer18" id="answer18" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">19. You can use &lt;? instead of &lt;?php.(True/Falls)</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer19" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer19" id="answer19" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">20. There are 7 primitive data types in PHP.(True/Falls)</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer20" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer20" id="answer20" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
                                    <input type="submit" id="submit-form" style="display: none;"/>
                                </form>
                            </div>
                        </div>
                        <div class="cus-btn-grp">
                            <button class="q-btn" id="previous" style="display: none;">Previous Question</button>
                            <button class="q-btn" id="next" style="display: inline-block;">Next Question</button>
                            <label for="submit-form" tabindex="0" class="q-btn" id="submit">Submit</label>
                        </div>
                    </div>
                </div>
                <div class="breaker"></div>
            </div>
            <div class="footer">Saint Louis University &copy; 2018</div>
            <script src="quiz-data.js"></script>
        </div>
    </body>
</html>