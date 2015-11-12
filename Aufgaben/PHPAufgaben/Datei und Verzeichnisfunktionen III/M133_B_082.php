<?php
function scan(){
	$files = [];
	$files = scandir(getcwd());
	foreach($files as $file){
		if($file != "." && $file != ".."){
			echo $file ."<br />";
		}
			
	}
}
scan();
?>