<?php
date_default_timezone_set("Europe/Berlin");
$timestamp = time();
$datum = date("d.m.Y",$timestamp);
$uhrzeit = date("H:i:s",$timestamp);
echo "Jeztt ist ". $uhrzeit ." Uhr";
?>