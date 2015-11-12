<?php
function scan(){
	$files = [];
	$files = scandir(getcwd());
	sort($files);
	foreach($files as $file){
		if($file != "." && $file != ".."){
			if(is_dir($file)){
				echo "<a href='". $file ."'>". $file ."</a><br />";
			}
			else {
				echo "<b><a href='". $file ."'>". $file ."</a><b/><br />";
			}
			
		}
			
	}
}
scan();
?>