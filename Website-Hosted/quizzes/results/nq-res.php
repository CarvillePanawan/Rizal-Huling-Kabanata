<?php
	session_start();

	$answers = array();
	$questions = array();
	$index = 0;
	$correctAnswers = 0;

	$con_db = new mysqli("localhost", "root", "", "webtech");
	$sql = "select answers from nodejs_answers";
	$res = $con_db->query($sql);

	while($row = $res->fetch_assoc()) {
		$answers[$index++] = $row["answers"];
	}

	for($i = 0; $i < $index; $i++) {
		$questions[$i] = isset($_POST["answer" . ($i+1)]) ? $_POST["answer" . ($i+1)] : "Wrong";
		if($questions[$i] == $answers[$i]) {$correctAnswers++;}
	}

	$username = $_SESSION['login_user'];

	if($correctAnswers > 0 ){
		$date = date('Y-m-d H:i:s');
		$sql_score = ("insert into nodejs_leaderboard(nodelead_name, nodelead_score, nodelead_date) 
					 VALUES ('".$username."', ".$correctAnswers.", CAST('". $date ."' AS DATE))") or die(mysql_error());
		if ($con_db->query($sql_score) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql_score . "<br>" . $con_db->error;
		}
	}
echo
	'
<!Doctype HTML>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="../../css/bootstrap.min.css">
  		<script src="../../js/jquery.min.js"></script>
  		<script src="../../js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="../quizlet-style.css">
	</head>
	
	<body>
		<div class="container container-q" style="padding: 10%;">
			<div class="jumbotron">
				<h1 class="display-4">Congratulations!</h1>
				<p class="lead">You scored '.$correctAnswers.' out of '.($index).'.</p>
				<hr class="my-4">
				<p class="lead">
					<a href="../../nodejs.php"><button class="btn btn-res" role="button">Go back</button></a>
				</p>
			</div>
		</div>
	</body>
</html>
	';
?>