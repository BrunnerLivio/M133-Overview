<?php
$file = file_get_contents('text.txt', true);
echo str_replace("Anton", "*", $file);
?>