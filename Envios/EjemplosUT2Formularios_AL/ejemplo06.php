<?php
include "cabecera.php";

$nombre = $_POST['nombre'];
$texto = $_POST['texto'];
echo "Tu nombre es $nombre <br />Tu comentario: $texto";

include "pie.php";
?>
