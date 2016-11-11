<?php
include "cabecera.php";

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
switch ($edad)
{
	case "uno": $ed = "entre 1 y 18";
	break;
	case "dos": $ed = "entre 18 y 65";
	break;
	case "tres": $ed = "más de 65";
	break;
}
echo "Hola Te llamas $nombre y tienes $ed años";

include "pie.php";
?>
