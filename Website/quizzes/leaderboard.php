<?php
	$con_db = new mysqli("localhost", "root", "", "webtech");

	$sql = "select name, score, date from leaderboard order by score desc";
	$res = $con_db->query($sql) or die ($con_db->error);

	echo "<table border='1'>";

	if($res->num_rows > 0) {
		while($row = $res->fetch_assoc()) {
			echo 	"<div class='row'>";
			echo		"<div class='col-md-4 text-center'>" . $row["name"] . "</div>";
			echo		"<div class='col-md-4 text-center'>" . $row["score"] . "</div>";
			echo		"<div class='col-md-4 text-center'>" . $row["date"] . "</div>";
			echo	"</div>";
		}
	}

	echo "</table>";

	$con_db->close();
?>