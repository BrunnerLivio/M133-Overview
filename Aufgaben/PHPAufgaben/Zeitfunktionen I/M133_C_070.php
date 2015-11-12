<?php
date_default_timezone_set("Europe/Berlin");

$stunde = 17;
$minute = 0;
$sekunde = 0;
$eingestellteZeit = mktime($stunde, $minute, $sekunde);
$eingestellteZeit = date("H:i:s",$eingestellteZeit);


$timestamp = time();
$uhrzeit = date("H:i:s",$timestamp);


echo "Jetzt ist ". $uhrzeit ." Uhr <br/>";
echo "Eingestellt ". $eingestellteZeit ." Uhr <br />";
echo strtotime($eingestellteZeit) - strtotime($eingestellteZeit);
?>