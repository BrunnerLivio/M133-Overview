<?php
if(isset($_POST["name"])){
	require("../dbconnect.php");
	mysqli_select_db($conn,"m133_a_100");
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	date_default_timezone_set("Europe/Berlin");
	$timestamp = time();
	$datum = date("y-m-d",$timestamp);
	echo $datum;
	$sql = "INSERT INTO messageboard (name, email, message, datum) VALUES ('$name', '$email', '$message', '$datum')";
	if ($conn->query($sql) === TRUE) {
    	echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

?>
<form method="post">
	<div>
		<input placeholder="Name" name="name" type="name" />
	</div>	
	<div>
		<input placeholder="Email" name="email" type="email" />
	</div>
	<div>
		<textarea name="message" placeholder="Message"></textarea>
	</div>
	<input type="submit" value="Hinzufügen" />
</form>