<?php
	session_start();

	$answers = array();
	$questions = array();
	$index = 0;
	$correctAnswers = 0;

	$con_db = new mysqli("localhost", "root", "", "webtech");
	$sql = "select websec_answers from websec_answers";
	$res = $con_db->query($sql) or die ($con_db->error);

	while($row = $res->fetch_assoc()) {
		$answers[$index++] = $row["websec_answers"];
	}

	for($i = 0; $i < $index; $i++) {
		$questions[$i] = isset($_POST["websec_answers" . ($i+1)]) ? $_POST["websec_answers" . ($i+1)] : "Wrong";
		if($questions[$i] == $answers[$i]) {$correctAnswers++;}
	}

	$username = $_SESSION['login_user'];

	if($correctAnswers > 0 ){
		$date = date('Y-m-d H:i:s');
		$sql_score = ("insert into websec_leaderboard(webseclead_name, webseclead_scorre, webseclead_date) 
					 VALUES ('".$username."', ".$correctAnswers.", CAST('". $date ."' AS DATE))") or die(mysql_error());
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
				<p class="lead">You scored '.$correctAnswers.' out of '.($index-1).'.</p>
				<hr class="my-4">
				<p class="lead">
					<a href="../../websecurity.php"><button class="btn btn-res" role="button">Go back</button></a>
				</p>
			</div>
		</div>
	</body>
</html>
	';
?>