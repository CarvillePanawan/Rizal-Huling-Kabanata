<?php
	$answers = array();
	$questions = array();
	$index = 0;
	$correctAnswers = 0;

	$con_db = new mysqli("localhost", "root", "", "webtech");
	$sql = "select answers from java_answers";
	$res = $con_db->query($sql);

	while($row = $res->fetch_assoc()) {
		$answers[$index++] = $row["answers"];
	}

	for($i = 0; $i < $index; $i++) {
		$questions[$i] = isset($_POST["answer" . ($i+1)]) ? $_POST["answer" . ($i+1)] : "Wrong";
		if($questions[$i] == $answers[$i]) {$correctAnswers++;}
	}

echo
	'
<!Doctype HTML>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="../css/bootstrap.min.css">
  		<script src="../js/jquery.min.js"></script>
  		<script src="../js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="quizlet-style.css">
	</head>
	
	<body>
		<div class="container container-q" style="padding: 10%;">
			<div class="jumbotron">
				<h1 class="display-4">Congratulations!</h1>
				<p class="lead">You scored '.$correctAnswers.' out of '.$index.'.</p>
				<hr class="my-4">
				<p>View the leaderborad here.</p>
				<p class="lead">
					<button class="btn btn-res" href="#" role="button" data-toggle="modal" data-target="#score-modal">Leaderboard</button>
					<a href="../java.html"><button class="btn btn-res" role="button">Go back</button></a>
				</p>
			</div>
			
			<div id="score-modal" class="modal fade" role="dialog">
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
		</div>
	</body>
</html>
	';
?>