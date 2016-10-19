<?php include "cabecera.php"; ?>

<h2>Generando casillas de verificación</h2>

	<?php 

		echo "<form action='' method='get' >";
		echo "<div>";

		for ($i=1; $i <= 10; $i++) { 
			
			echo '<input type="checkbox" name="casilla'.$i.'" value ="casilla'.$i.'" />';
			echo "Casilla $i<br/>";
			
		}

		echo "</div></form>";

	?>

<?php include "pie.php"; ?>

