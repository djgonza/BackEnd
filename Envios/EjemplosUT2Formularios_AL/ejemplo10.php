<?php
include "cabecera.php";

$nombre = $_POST['nombre'];
$resultado = "Tu nombre es $nombre <br />Tus aficiones son: ";
if (!isset($_POST['aficiones']))
{
	echo "No has seleccionado ninguna afición";
}
else
{
	$aficiones = $_POST['aficiones'];
	$resultado .= "Tus aficiones son: ";
	foreach ($aficiones as $aficion)
	{
		$resultado .= $aficion." ";
	}
	echo $resultado;
}

include "pie.php";
?>
