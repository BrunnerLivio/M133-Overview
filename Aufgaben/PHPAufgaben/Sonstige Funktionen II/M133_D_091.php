<?php
function startsWith($haystack, $needle) {
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
}
$datei="M133_A_081.txt";
if(isset($_POST["fileText"])){
	$neueadresse = $_POST["fileText"];
	if(!startsWith($neueadresse, "http://"))
	{
		$neueadresse = "http://".$neueadresse;
	}
	$current = file_get_contents($datei);
	$current .= $neueadresse. "\n";
	
	file_put_contents($datei, $current);
}

$file = fopen($datei, "r");
$lines = [];
$linesCounter = 0;
if ($file) {
	while (($line = fgets($file)) !== false) {
		$lines[$linesCounter] = $line;
		$linesCounter++;
	}
	$lines = array_reverse($lines);
	fclose($file);
	
} else {
	echo "Could not open file ".$datei;
} 



?>
<form method="post">
	<input type="text" placeholder="URL" name="fileText" />
	<input type="submit" />
	<br />
	<?php
	foreach($lines as $line){
		
		echo "<a href='".$line."'>".$line."</a><br />";
	} 
	?>
</form>