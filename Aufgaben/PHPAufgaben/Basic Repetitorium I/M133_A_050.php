<?php
	function umrechnung($zahl){
		$binarzahl = decbin ($zahl);
		$hexzahl = dechex ($zahl);
		return "Umrechnung der Dezimalzahl:". $zahl . "<br /> 
		ins Binärsystem:".$binarzahl."<br />
		ins Hexadezimalsystem:".$hexzahl;
	}
	
	
	if(isset($_GET["number"])){
		echo umrechnung($_GET["number"]);
	}
?>
<form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
	<div>
		<label for="number">Zahl:</label> <input type="number" name="number" id="number" />
	</div>
	<input type="submit" />
</form>