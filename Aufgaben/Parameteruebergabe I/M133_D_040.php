<?php 
	if(!isset($_GET["parameter"])){
		for($i = 0;$i < 4;$i++){
			?>
			<a href="<?php echo $_SERVER["PHP_SELF"]."?parameter=".$i; ?>">
				Link <?php echo $i ?>
			</a><br />
			<?php
		}
	}
	else{
		echo "Sie haben den ".$_GET["parameter"].". Link gedrückt";
	}
?>

