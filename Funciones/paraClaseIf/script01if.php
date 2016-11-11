<?php include "cabecera.php"; ?>

<?php 

	$aleatorio = rand(1,10);
	$valorNota;
?>

<?php 

	if ($aleatorio < 5) {
		$valorNota = "Suspenso";
	}elseif ($aleatorio > 4 && $aleatorio < 8) {
		$valorNota = "Aprobado";
	}elseif ($aleatorio > 7 && $aleatorio < 10) {
		$valorNota = "Notable";
	}else {
		$valorNota = "Sobresaliente";
	}

	echo  "Juan Carlos ha tenido un ".$valorNota;

?>

<?php include "pie.php"; ?>
