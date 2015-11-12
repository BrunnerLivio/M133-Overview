<?php
	$file = fopen("M133_A_080.txt", "r");
	$lines = [];
	$linesCounter = 0;
	if ($file) {
		while (($line = fgets($file)) !== false) {
			$lines[$linesCounter] = $line;
			$linesCounter++;
		}
		fclose($file);
		$lines = array_reverse($lines);
		foreach($lines as $line){
			echo $line . "<br />";
		}
		
	} else {
		
	} 
?>