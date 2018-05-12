<!Doctype>

<html>
	
<head>
	<meta charset="UTF-8">
	<title>Webtech Finals</title>
	<link rel="stylesheet" type="text/css" href="css/topics.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/quiz.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
</head>
	
<body>
	<div class="container-a">
		<div class="header">
			<div class="header-left">
				<a href="../../index.html">
					<img id="header-img" src="images/header.png" alt="website header">
				</a>
				<input id="search-bar" type="text" placeholder="Search">
				<button id="search-btn"></button>
			</div>
			<ul class="nav-a">
				<li><button type="button" class="top-btn" data-toggle="modal" data-target="#login-modal">Log In</button></li>
				<li><button type="button" class="top-btn" data-toggle="modal" data-target="#signup-modal">Sign Up</button></li>
			</ul>
		</div>
		<div id="login-modal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Log In</h4>
					</div>
					<div class="modal-body">
						<div class="board">
						Log In				
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div id="signup-modal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Sign Up</h4>
					</div>
					<div class="modal-body">
						<div class="board">
						Sign Up				
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
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
						<div id="quiz"></div>
					</div>

					<div class="cus-btn-grp">
						<button class="q-btn" id="previous">Previous Question</button>
						<button class="q-btn" id="next">Next Question</button>
						<button class="q-btn" id="submit" data-toggle="modal" data-target="#score-modal">Submit Quiz</button>
					</div>

					<div id="score-modal" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h3 class="modal-title">Congratulations!</h3>
								</div>
								<div class="modal-body">
									<div id="results"></div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
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