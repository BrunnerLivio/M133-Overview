
<?php
$myfile = fopen("sensitive_content.txt", "r") or die("Unable to open file!");
$inhalt = fread($myfile,filesize("sensitive_content.txt"));
if(md5($inhalt) == "8bfa081cac4f00d2290c562fb5ca7235"){
	echo "Die Datei ist unverändert <br />";
	echo md5($inhalt );
}
else {
	echo "Die Datei wurde verändert";
}
fclose($myfile);
?>