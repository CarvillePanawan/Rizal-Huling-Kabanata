<?php
	$con_db = new mysqli("localhost", "root", "", "leaderboard");

	$sql = "select id, name, score, time from scores order by score desc";
	$res = $con_db->query($sql);

	echo "<table border='1'>";

	if($res->num_rows > 0) {
		while($row = $res->fetch_assoc()) {
			echo 	"<div class='row'>";
			echo		"<div class='col-md-4 text-center'>" . $row["name"] . "</div>";
			echo		"<div class='col-md-4 text-center'>" . $row["score"] . "</div>";
			echo		"<div class='col-md-4 text-center'>" . $row["time"] . "</div>";
			echo	"</div>";
		}
	}

	echo "</table>";

	$con_db->close();
?>