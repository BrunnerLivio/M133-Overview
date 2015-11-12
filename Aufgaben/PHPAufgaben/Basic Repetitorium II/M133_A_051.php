<?php
	if(isset($_GET["generateRandom"])){
		$randomNumber = rand(1,6);
		echo $randomNumber;
	}
	
	
?>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>?generateRandom=true" method="post">
	<input type="submit" value="RANDOM MOTHAFOCKA"/>
</form>