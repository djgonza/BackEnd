<div>
	<h3>Ej Cuatro</h3>
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

	echo verArray($carrito[2]);

	//valor total del carrito
	$total = 0;
	foreach ($carrito as $key => $value) {
		$total += $value["Precio"] * $value["Unidades"];
	}

	echo "<p>El precio total del carrieto es $total</p>";

?>
</div>