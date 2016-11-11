<?php include "cabecera.php"; ?>

<h2>Generando botones</h2>

	<?php 
		echo "<form id='form' action='' method='get' >"; 
		echo "<div>";
		for ($i=1; $i <= 10; $i++) { 
			echo '<label>Boton '.$i.'</label>';
			echo '<button type="button" name="botonEdit'.$i.'">Editar</button>';
			echo '<button type="button" name="botonBorr'.$i.'">Borrar</button><br />';
		}
		echo "</div></form>";
	?>

<?php include "pie.php"; ?>