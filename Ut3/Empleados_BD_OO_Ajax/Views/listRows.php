<?php include "head.php"; ?>

<h2>Lista de Empleados</h2>

<?php

	// Mensajes
	for ($i = 0; $i < count($msg); $i++) { 
		echo "<p>$msg[$i]</p>";
	}

	// Si hay registros
	if (!empty($result)){
		include "tableList.php";

	// Si no hay registros
	}else{
		echo "<p>Ningun registro encontrado!!!</p>";

	}

?>

<?php include "footer.php"; ?>

