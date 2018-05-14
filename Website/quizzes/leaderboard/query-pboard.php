<?php
	$con_db = new mysqli("localhost", "root", "", "webtech");

	$sql = "select phplead_id, phplead_name, phplead_score, phplead_date from php_leaderboard order by phplead_score desc";
	$res = $con_db->query($sql);

	if($res->num_rows > 0) {
		while($row = $res->fetch_assoc()) {
			echo 	"<div class='row'>";
			echo		"<div class='col-md-4 text-center'>" . $row["phplead_name"] . "</div>";
			echo		"<div class='col-md-4 text-center'>" . $row["phplead_scorre"] . "</div>";
			echo		"<div class='col-md-4 text-center'>" . $row["phplead_date"] . "</div>";
			echo	"</div>";
		}
	}
	$con_db->close();
?>