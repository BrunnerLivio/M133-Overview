<?php
function scan(){
	$files = [];
	$files = scandir(getcwd());
	foreach($files as $file){
		if($file != "." && $file != ".."){
			echo "<a href='". $file ."'>". $file ."</a><br />";
		}
			
	}
}
scan();
?>