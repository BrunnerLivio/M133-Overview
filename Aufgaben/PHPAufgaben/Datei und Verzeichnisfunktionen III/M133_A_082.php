<?php
function scan(){
	$files = [];
	$files = scandir(getcwd());
	foreach($files as $file){
		echo $file ."<br />";
	}
}
scan();
?>