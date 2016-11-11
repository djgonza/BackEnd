<?php 

	function obtenerRegistros($conexion, $sql) {

		$resul = mysqli_query($conexion, $sql);

		if (!$resul) { // ha ocurrido un error
			$error = "Error en consulta - ".mysqli_error($conexion);
			include "vistas/error.php";
			exit();
		}

		while ($fila = mysqli_fetch_array($resul)) {
			$personas[] = $fila;
		}

		return $personas;
	}

?>