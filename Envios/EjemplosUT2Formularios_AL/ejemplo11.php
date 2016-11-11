<?php
include "cabecera.php";

$nombre = $_POST['nombre'];
$resultado = "Tu nombre es $nombre <br />Tu afición es: {$_POST['aficiones']}";
echo $resultado;

include "pie.php";
?>
