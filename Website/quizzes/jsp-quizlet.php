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
                                <form action="jsq-res.php" method="post">
                                    <div class="slide active-slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">1. Where are java statements, variable, method declarations, or expressions used for page scripting are contained?</div>
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
	<div class="question">2. What does JSP stand for?</div>
	<div class="answers">
		<div class="cus-answer-container">
			<label for="answer2" class="q-label">
				&nbsp; 
				<h5>Answer: </h5>
				<input name="answer2" id="answer2" class="q-input" type="text">
			</label>
		</div>
	</div>
</div>
<div class="slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">3. JSP rovides a quick way to alter or create ________ web content.</div>
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
	<div class="question">4. JSP's code block delimeter</div>
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
	<div class="question">5. JSP's comment delimeter</div>
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
	<div class="question">6. Assigns the overall structure of the servlet class.</div>
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
	<div class="question">7. Initialization of one or more variables and methods to be used in the program.</div>
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
	<div class="question">8. <code>&lt;%! int age = 21; %&gt;</code> and <code>&lt;%= age %&gt;</code> are examples of what?</div>
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
	<div class="question">9. Three types of directives?</div>
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