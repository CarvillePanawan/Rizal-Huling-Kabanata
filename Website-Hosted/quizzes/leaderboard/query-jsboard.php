<?php
	$con_db = new mysqli("localhost", "root", "", "webtech");

	$sql = "select jsplead_id, jsplead_name, jsplead_score, date from jsp_leaderboard order by jsplead_score desc";
	$res = $con_db->query($sql);

	if($res->num_rows > 0) {
		while($row = $res->fetch_assoc()) {
			echo 	"<div class='row'>";
			echo		"<div class='col-md-4 text-center'>" . $row["jsplead_name"] . "</div>";
			echo		"<div class='col-md-4 text-center'>" . $row["jsplead_scorre"] . "</div>";
			echo		"<div class='col-md-4 text-center'>" . $row["jsplead_date"] . "</div>";
			echo	"</div>";
		}
	}
	$con_db->close();
?>