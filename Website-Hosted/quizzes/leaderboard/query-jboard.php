<?php
	$con_db = new mysqli("localhost", "root", "", "webtech");

	$sql = "select javalead_id, javalead_name, javalead_scorre, javalead_date from java_leaderboard order by javalead_scorre desc";
	$res = $con_db->query($sql);

	if($res->num_rows > 0) {
		while($row = $res->fetch_assoc()) {
			echo 	"<div class='row'>";
			echo		"<div class='col-md-4 text-center'>" . $row["javalead_name"] . "</div>";
			echo		"<div class='col-md-4 text-center'>" . $row["javalead_scorre"] . "</div>";
			echo		"<div class='col-md-4 text-center'>" . $row["javalead_date"] . "</div>";
			echo	"</div>";
		}
	}
	$con_db->close();
?>