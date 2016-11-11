<?php include "includes/funciones.php"; ?>
<?php include "includes/cabecera.php"; ?>

<?php 

	$nameAlum = array("Juan", "Pepe", "Maria", "Ana", "Juan", "Felipe");
	array_push($nameAlum, "Manolete");

	$nameAlumAsocia = array(
		'Ana' => 5,
		'Pedro' => 4,
		'Luis' => 7,
		'Esteban' => 8,
		'Maite' => 5,
		'Isabel' => 4.5
		);

	verArray($nameAlum);

	echo "Total de alumnos ".sizeof($nameAlum);

	foreach ($nameAlum as $key => $value) {
		echo "<p>$value</p>";
	}

	verArray($nameAlumAsocia);

	echo "<hr />";

	$aprobados = 0;
	$media = 0;

	foreach ($nameAlumAsocia as $key => $value) {
		
		echo "<p>$key - $value</p>";
		
		if ($value >= 5) {
			$aprobados++;
		}

		$media += $value;
	}

	echo "<p>Total aprobados $aprobados</p>";
	echo "<p>Nota media del curso ".number_format($media / sizeof($nameAlumAsocia),2)."</p>";

	sort($nameAlumAsocia, SORT_NUMERIC);
	verArray($nameAlumAsocia);

?>

<?php include "includes/pie.php"; ?>