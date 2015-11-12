<?php
require("../dbconnect.php");
mysqli_select_db($conn, "m133_a_100");
if(isset($_GET["delete"])){
	$id = $_GET["delete"];
	$sql = "DELETE FROM messageboard WHERE id = $id";
	if ($conn->query($sql) === TRUE) {
    	echo "Erfolgreich gelöscht";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
if(isset($_POST["name"])){
	
	mysqli_select_db($conn,"m133_a_100");
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	date_default_timezone_set("Europe/Berlin");
	$timestamp = time();
	$datum = date("y-m-d",$timestamp);
	$sql = "INSERT INTO messageboard (name, email, message, datum) VALUES ('$name', '$email', '$message', '$datum')";
	if ($conn->query($sql) === TRUE) {
    	echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}




$sql = "SELECT * FROM messageboard ORDER BY id DESC";
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
	?>
		<div>
			<strong>
				<?php echo $name ?>
			</strong>
		</div>
		<div>
			<?php if(!empty($email)){
				echo "<a href='mailto:$email'>".$email."</a>";
			}  else {
				echo "Nicht gefunden";	
			}?>
		</div>
		<div>
			<?php echo $message; ?>	
		</div>
		<div> 
			<a href="?delete=<?php echo $id; ?>">Löschen</a>
		<div>
	<?php
}
	


mysqli_close($conn);
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