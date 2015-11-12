<?php
	$file = fopen("M133_A_080.txt", "r");
	if ($file) {
		while (($line = fgets($file)) !== false) {
			echo $line. '<br />';
		}
	
		fclose($file);
	} else {
		
	} 
?>