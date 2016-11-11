<?php
// conectar con el servidor
include 'config/config.php';
$conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);

if (!$conexion) { // no se puede establecer conexión
	$error = "Imposible establecer conexión con el servidor de BD";
	include "vistas/error.php";
	exit(); //Termina la ejecución
}

// seleccionar la base de datos de trabajo
$resul = mysqli_select_db($conexion, DB_NAME);

if (!$resul) {
	$error = "Imposible localizar la base de datos " .DB_NAME;
	include "vistas/error.php";
	exit(); //Termina la ejecución
}

?>