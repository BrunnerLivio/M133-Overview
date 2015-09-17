<?php
foreach($_GET as $key => $value)
{
	if($value == "on"){
		$color = $key;
	}
}
?>
<div style="background-color:<?php echo $color ?>;">
	<form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
		<input type="radio" name="red" />Rot
		<input type="radio" name="green" />Grün
		<input type="radio" name="blue" />Blau
		<input type="radio" name="yellow" />Gelb
		<input type="radio" name="grey" />Grau
		<input type="submit" />
	</form>
	
</div>
