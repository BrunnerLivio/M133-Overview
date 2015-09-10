<?php
    function namensausgabe($name = "Livio", $alter = 17){
		return "Mein Name ist ". $name. ", ich bin ". $alter ." Jahre alt";
	}
	
?>
<html>
	<head>
	</head>
	<body>
		<p>
			<?php echo namensausgabe("Ronald", 21); ?>	
		</p>
	</body>
</html>