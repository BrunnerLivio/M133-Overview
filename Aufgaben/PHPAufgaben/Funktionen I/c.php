<?php
    function namensausgabe($name = "Ronald", $alter = 20){
		return "Mein Name ist ". $name . " und ich bin ". $alter . " Jahre alt.";
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