<?php include "cabecera.php"; ?>

<h2>Libros Compra 250€</h2>

	<?php 

		define("COSTE", 16);
		$importe = 0;
		$i = 1;
		while ($importe <= 250) {
			
			echo "<p>".$i." : ".$importe." </p>";
			$importe += COSTE;
			$i++;
		}

		echo "<p>Por ".COSTE."€,  se pueden comprar ".$i." libros</p>";

	?>

<?php include "pie.php"; ?>