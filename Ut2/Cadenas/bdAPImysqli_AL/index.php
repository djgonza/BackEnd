<?php
	require_once 'modelo/conexion.php';
	include "helper/utilidades.php";

	if (isset($_GET['opcion']) && $_GET['opcion'] == 'listar'){
		
		/*$sql = 'SELECT * FROM personas';
		$resul = mysqli_query($conexion, $sql);
		
		if (!$resul) {// ha ocurrido un error
			$error = "Error en consulta - ".mysqli_error($conexion);
			include "vistas/error.php";
			exit();
		}

		//$personas = array();
		
		while ($fila = mysqli_fetch_array($resul)){
			$personas[] = $fila;
		}

		include "vistas/vista_listar.php";
		exit();*/


		$personas = obtenerRegistros($conexion, "SELECT * FROM personas");
		include "vistas/vista_listar.php";
		exit();

	}

	/*$sql = "SELECT nombre, apellido FROM personas";
	$resul = mysqli_query($conexion, $sql);
	if (!$resul) { // ha ocurrido un error
		$error = "Error en consulta - ".mysqli_error($conexion);
		include "vistas/error.php";
		exit();
	}

	$personas = array(); // guardo en este array las personas devueltas por la consulta
	// para mostrar la plantilla de vista_inicio.php
	while ($fila = mysqli_fetch_array($resul)) {
		$personas[] = $fila;
	}

	include "vistas/vista_inicio.php";

	*/

	$personas = obtenerRegistros($conexion, "SELECT nombre, apellido FROM personas");
	include "vistas/vista_inicio.php";
?>