<?php
    function namensausgabe($name){
		return "Mein Name ist ". $name;
	}
	
?>
<html>
	<head>
	</head>
	<body>
		<p>
			<?php echo namensausgabe("Ronald"); ?>	
		</p>
	</body>
</html>