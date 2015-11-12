<?php
require("../dbconnect.php");
mysqli_select_db($conn,"m133_a_100");
?>
<form>
	<div>
		<input placeholder="Name" name="name" type="name" />
	</div>	
	<div>
		<input placeholder="Email" name="email" type="email" />
	</div>
	<div>
		<textarea name="message" placeholder="Message"></textarea>
	</div>
	<input type="submit" value="Hinzufügen" />
</form>