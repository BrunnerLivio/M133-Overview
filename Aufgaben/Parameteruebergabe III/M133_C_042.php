<?php
	$passwords = [
		"livio" => "123",
		"faggot" => "1234",
	];
	if(isset($_POST["name"]) && isset($_POST["passwort"])){
		
		foreach($passwords as $key => $value){
			if($_POST["name"] == $key && $_POST["passwort"] == $value){
				echo "Geheimer Text";
			}
		}
	}
?>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
	<input type="text" name="name" placeholder="name" />
	<input type="password" name="passwort" placeholder="passwort" />
	<input type="submit" />
</form>