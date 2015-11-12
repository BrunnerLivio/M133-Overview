<?php
$file = file_get_contents('text.txt', true);
echo preg_replace('/[^@\s]*@[^@\s]*\.[^@\s]*/', "*", $file);
?>