<?php
	$file = fopen("M133_A_080.txt", "r");
	if ($file) {
		$line = fgets($file);
		echo $line;
	
		fclose($file);
	} else {
		
	} 
?>