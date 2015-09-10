<?php
    $titel = "PHP Farben Test";
	$color1 = "#999999";
	
	mt_srand((double)microtime()*1000000);
	$zufallswert = mt_rand(0, 16777215);
	$color2 = "#". dechex($zufallswert);
	
	$zufallswert = rand(0, 255);
	$color3 = "rgb(".$zufallswert.",". $zufallswert .",". $zufallswert .")";
?>
<html>
	<head>
		<title><?php echo $titel; ?></title>
	</head>
	<style type="text/css">
			body{
				background-color: $color;
			}
	</style>
	<body>
		<div style="width:100px;height:100px;background-color:". $color1></div>
		<div style="width:100px;height:100px;background-color:". $color2"></div>
		<div style="width:100px;height:100px;background-color:". $color3"></div>
	</body>
</html>