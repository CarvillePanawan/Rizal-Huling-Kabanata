<?php
	$con_db = new mysqli("localhost", "root", "", "webtech");

	$sql = "select webseclead_id, webseclead_name, webseclead_score, webseclead_date from websec_leaderboard order by webseclead_score desc";
	$res = $con_db->query($sql);

	if($res->num_rows > 0) {
		while($row = $res->fetch_assoc()) {
			echo 	"<div class='row'>";
			echo		"<div class='col-md-4 text-center'>" . $row["webseclead_name"] . "</div>";
			echo		"<div class='col-md-4 text-center'>" . $row["webseclead_scorre"] . "</div>";
			echo		"<div class='col-md-4 text-center'>" . $row["webseclead_date"] . "</div>";
			echo	"</div>";
		}
	}
	$con_db->close();
?>