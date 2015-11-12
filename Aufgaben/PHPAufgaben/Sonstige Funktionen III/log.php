<?php
function aufzeichnung($seite){
	$current = file_get_contents("website.log");
	
	$neueZeile = date("d.m.Y"). " ". date("h:i:s"). " ". $_SERVER["REMOTE_ADDR"] ." ". $seite;
	$current .= $neueZeile. "\n";
	
	
	file_put_contents("website.log", $current);
}
?>