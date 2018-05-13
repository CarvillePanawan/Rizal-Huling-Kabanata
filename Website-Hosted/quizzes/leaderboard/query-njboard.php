<?php
	$con_db = new mysqli("localhost", "root", "", "webtech");

	$sql = "select nodelead_id, nodelead_name, nodelead_scorre, nodelead_date from node_leaderboard order by nodelead_score desc";
	$res = $con_db->query($sql);

	if($res->num_rows > 0) {
		while($row = $res->fetch_assoc()) {
			echo 	"<div class='row'>";
			echo		"<div class='col-md-4 text-center'>" . $row["nodelead_name"] . "</div>";
			echo		"<div class='col-md-4 text-center'>" . $row["nodelead_scorre"] . "</div>";
			echo		"<div class='col-md-4 text-center'>" . $row["nodelead_date"] . "</div>";
			echo	"</div>";
		}
	}
	$con_db->close();
?>