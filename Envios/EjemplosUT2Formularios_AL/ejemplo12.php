<?php
include "cabecera.php";

$nombre = $_POST['nombre'];
$aficiones = $_POST['aficiones'];
$af = "Aficiones: ";
foreach ($aficiones as $a)
{
	$af .= $a." ";
}
$resultado = "Tu nombre es $nombre <br />$af";

echo $resultado;

include "pie.php";
?>
