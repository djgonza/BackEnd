<?php include "cabecera.php"; ?>

<h2>Generando enlaces</h2>

<?php 
	for ($i=1; $i <= 10; $i++) { 
		echo '<p><a href="#">Enlace '.$i.'</a></p>';
	}
?>

<?php include "pie.php"; ?>