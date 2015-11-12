<html>
	<?php
	require("../dbconnect.php");
	mysqli_select_db($conn, "m133_a_100");

	$sql = "SELECT * FROM messageboard WHERE id = 1;";
	$result = mysqli_query($conn, $sql);
	
	$row = mysqli_fetch_assoc($result);
	
	$id = $row["id"];
	$name = $row["name"];
	$email = $row["email"];
	$message = $row["message"];
	$datum = $row["datum"];
	
	echo "<br / > $id; $name; $email; $message; $datum";
	
	
	mysqli_close($conn);
	?>
</html>