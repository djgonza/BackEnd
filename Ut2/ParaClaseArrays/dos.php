<div>
	<h3>Ej Dos</h3>

<?php 

	$paises = array(
		"Austria" => "Viena",
		"Italia" => "Roma",
		"Francia" => "Paris",
		"España" => "Madrid",
		"Portugal" => "Lisboa",
		"Irlanda" => "Dublin",
		"Alemania" => "Berlin",
		"Gracia" => "Atenas" 
	);

	// ordenacion
	verArray($paises);
	arsort($nameAlumAsocia);
	verArray($paises);


	// italia
	$encontrado = false;
	foreach ($paises as $key => $value) {
		if($key = "Italia") {
			$encontrados = !$encontrado;
			break;
		}
	}

	if($encontrado) {
		echo "<p>Italia esta en la lista</p>";
	}else{
		echo "<p>Italia no esta en la lista</p>";
	}

	// sacar claves en otro array
	$claves = array();
	foreach ($paises as $key => $value) {
		array_push($claves, $key);
	}

	?><h3>Paises</h3><?php
	verArray($claves);

	// sacar valores en otro array
	$valores = array();
	foreach ($paises as $key => $value) {
		array_push($valores, $key);
	}

	?><h3>Capitales de la UE</h3><?php
	verArray($valores);


	// dado un pais obtener su capital

	?><h3>Pais: España Capital: <?php echo $paises["España"]; ?></h3><?php

?>
</div>