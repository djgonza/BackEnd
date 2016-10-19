<div>
	<h3>Ej Tres</h3>
<?php 

	$libroUno = array(
				"ISBM" => "124356-A",
				"Titulo" => "El asedio",
				"Autor" => "Arturo Perez Reverte",
				"Precio" => "22.5"
			);

	$libroDos = array(
				"ISBM" => "125623-A",
				"Titulo" => "Historia de un canalla",
				"Autor" => "Julia Navarro",
				"Precio" => "25.5"
			);

	$libroTres = array(
				"ISBM" => "586954-A",
				"Titulo" => "La tierra que pisamos",
				"Autor" => "Jesús Carrasco Jaramillo",
				"Precio" => "21"
			);

	$libros = array($libroUno, $libroDos, $libroTres);

	?><h3>Libros</h3><?php

	?><h3>Ver Array</h3><?php
	verArray($libros);
	?><h3>Var Dump</h3><?php
	var_dump($libros);
	?><h3>For Each</h3><?php
	foreach ($libros as $key => $value) {
		foreach ($value as $keyDos => $valueDos) {
			echo "<p>".strtoupper($keyDos)." - $valueDos</p>";
		}
		echo "<hr />";
	}

?>
</div>