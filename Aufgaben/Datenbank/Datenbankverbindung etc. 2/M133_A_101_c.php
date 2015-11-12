<html>
	<?php
	require("dbconnect.php");
	mysqli_select_db($conn, "m133_a_100");

	$sql = "SELECT * FROM messageboard;";
	$result = mysqli_query($conn, $sql);
	
	$rowcount = mysqli_num_rows($result);
	
	for($actual_row=0; $actual_row<$rowcount; $actual_row++)
	{
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$id = $row["id"];
		$name = $row["name"];
		$email = $row["email"];
		$message = $row["message"];
		$datum = $row["datum"];
		
		echo "<br / > $id; $name; $email; $message; $datum";
	}
		
	mysqli_close($conn);
	?>
</html>