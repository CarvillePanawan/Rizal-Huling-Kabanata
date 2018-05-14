<?php
session_start();

if(!isset($_SESSION['login_user']))
{
	echo"<script>alert('You must be logged in to view and answer the quiz.');
		window.history.back();
		</script>";
    exit();
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Webtech Finals</title>
        <link rel="stylesheet" type="text/css" href="../css/topics.css">
        <link rel="stylesheet" type="text/css" href="../css/fonts.css">
        <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" href="quizlet-style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-a">
            <div class="header">
                <div class="header-left">
                    <a href="../index.html">
                    <img id="header-img" src="../images/header.png" alt="website header">
                    </a>
                </div>
                <ul class="nav-a">
                <?php
					$username = $_SESSION['login_user'];
					echo '
						<li class="dropdown">
							<span class="dropdown-toggle" data-toggle="dropdown" href="#">'.$username.'&nbsp;<span class="caret"></span></span>
							<ul class="dropdown-menu dropdown-menu-right">
								<div class="dropdown-divider"></div>
								<li><a href="../php/logout.php">Logout</a></li>
							</ul>
						</li>
						';
				?>
                </ul>
            </div>
            <div class="body">
                <div class="container">
                    <div class="jumbotron banner">
                        <img class="nav-img" src="../images/web-security-logo.png">
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
                                    <?php include "leaderboard/query-wsboard.php"; ?>
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
                                <form action="results/ws-res.php" method="post">
                                    <div class="slide active-slide">
	<span class="glyphicon glyphicon-question-sign"></span> &nbsp;
	<div class="question">1. Occurs usually for SQL when malicious SQL statements are sent to an input within an web application that is inside of an SQL query and the malicious SQL statements will be run alongside the the SQL query.</div>
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
	<div class="question">2. What does OWASP stand for?</div>
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
	<div class="question">3. What does XSS stand for?</div>
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
	<div class="question">4. Unauthorized access to a system functionality and resources has created exploitable weaknesses that could expose your web application to malicious attackers.</div>
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
	<div class="question">5. Incorrect or lacking design and implementation of the identity and access controls.</div>
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
	<div class="question">6. When a web application does not provide adequate protection for sensitive information from being disclosed or gained access to by attackers.</div>
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
	<div class="question">7. An attacker can utilize Denial of Service and find access to files and services, by exploiting an easily accesible, seldom used feature in XML parsers(to access and manipulate XML).</div>
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
	<div class="question">8. When attackers discover access or retrieve data from the system by accessing default accounts, unprotected files and directories or misconfigured security setting for their own benefit</div>
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
	<div class="question">9. Attackers utilize a web application that is vulnerable, once a user visits or uses the web application, a malicious script is delivered to the users web browser thus compromising it.</div>
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
	<div class="question">9. What does XXE stand for?</div>
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
        </div>
		
		<script src="quizlet-script.js" async></script>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>