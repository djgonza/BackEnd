<?php 
	
	$carrito = array(
		array(
			"id" => 1,
			"desc" => "Diccionario Australiano",
			"Precio" => 24.95,
			"Unidades" => 2
		),
		array(
			"id" => 2,
			"desc" => "Building your own database",
			"Precio" => 100,
			"Unidades" => 4
		),
		array(
			"id" => 3,
			"desc" => "Simply Javascript",
			"Precio" => 19.99,
			"Unidades" => 3
		),
		array(
			"id" => 4,
			"desc" => "Android Porgramming",
			"Precio" => 39.95,
			"Unidades" => 1
		)
	);

	$resul = "";

	foreach ($carrito as $key => $value) {
		if($value["Precio"] < 25) {
			$resul .= 
				"<div class='articulo'>".
					"<span>Descripcion: ".$value["desc"]."</span></p>".
					"<span>Precio: ".$value["Precio"]."</span>".
				"</div>";
		}
	}

	include "resultado.php";

?>