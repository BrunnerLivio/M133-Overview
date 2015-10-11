
<?php
$myfile = fopen("sensitive_content.txt", "r") or die("Unable to open file!");
$inhalt = fread($myfile,filesize("sensitive_content.txt"));
if($inhalt == "Diese Infromation bleibt immer gleich."){
	echo "Die Datei ist unverändert <br />";

}
else {
	echo "Die Datei wurde verändert";
}
fclose($myfile);
?>