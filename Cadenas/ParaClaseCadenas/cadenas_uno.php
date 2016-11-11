<?php

	include "includes/cabecera.php";

	$cadena = "Ejemplo de cadenas";
	echo "<p>La longitud de la frase '$cadena' - ".strlen($cadena)."</p>";
	echo "frase en mayúsculas ".strtoupper($cadena);

	include "includes/pie.php";

?>