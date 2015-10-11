<?php
	if($_SERVER["REMOTE_ADDR"] == "127.0.0.1"){
		echo "Sie waren bereits hier";
	}
	else {
		echo "Sie waren noch nie hier";
	}
?>