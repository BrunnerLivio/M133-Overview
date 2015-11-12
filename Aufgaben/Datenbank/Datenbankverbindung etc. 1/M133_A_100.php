<?php
$conn = mysqli_connect("localhost", "root", "", "m133_a_100");
if(mysqli_connect_errno()){
	echo "Failed to connect to MySql:". mysqli_connect_errno();
}
else {
	echo "connected";
}

$sql = "SELECT * FROM `messageboard` WHERE id = 5;";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$id= $row["id"];
$name = $row["name"];
$email = $row["email"];
$message = $row["message"];
$datum = $row["datum"];

echo "<br />$id <br /> $name <br /> $email <br /> $message <br /> $datum";
mysqli_close($conn);