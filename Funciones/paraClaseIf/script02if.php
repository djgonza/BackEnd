<?php include "cabecera.php"; ?>

<?php 
	
	$persona = "Maria";
	$mensaje;

?>
<?php 

	if (date("H") < 12) {
		$mensaje = "Buenos dias ".$persona;
	} else {
		$mensaje = "Buenas tardes ".$persona;
	}	

?>

<?php include "pie.php"; ?>