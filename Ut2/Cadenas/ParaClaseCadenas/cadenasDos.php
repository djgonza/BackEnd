<?php

	include "includes/cabecera.php";

	$cadena = "Ejemplo de cadenas en php";
	$cadenaExplode = explode(" ", $cadena);
	$countEmpiezan = 0;
	foreach ($cadenaExplode as $key => $value) {
		if(substr($value, 0, 1) == "E" || substr($value, 0, 1) == "e"){
			$countEmpiezan ++;
		}
	}
	echo "<p>Palabras en la frase '$cadena' - ".count($cadenaExplode)."</p>";

	echo "<p>Palabras en la frase '$cadena' que empiezan por E - ".$countEmpiezan."</p>";

	include "includes/pie.php";

?>