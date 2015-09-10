<?php
include("../models/folder.php");
$folder = new Folder("../../Aufgaben", "Aufgaben");
echo json_encode($folder->files);
?>