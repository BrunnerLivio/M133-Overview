<form action"<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
	<div>
		<input tye="text" name="feld1">
	</div>
	<div>
		<input tye="text" name="feld2">
	</div>
	<div>
		<input type="submit" name="send" value="Abschicken" />		
	</div>
	<?php
		if(isset($_POST["send"])){
			echo "Inhalt des ersten Feldes ist:".$_POST["feld1"]."<br />";
			echo "Inhalt des zweiten Feldes ist:".$_POST["feld2"]."<br />";
		}
	?>
</form>
