<?php
	if(isset($_POST["name"]) && isset($_POST["passwort"])){
		if($_POST["name"] == "admin" && $_POST["passwort"] == "xyz"){
			echo "Geheimer Text";
		}
	}
?>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
	<input type="text" name="name" placeholder="name" />
	<input type="password" name="passwort" placeholder="passwort" />
	<input type="submit" />
</form>