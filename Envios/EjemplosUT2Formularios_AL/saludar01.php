<?php
include "cabecera.php";
$nombre = $_GET['nombre'];
$edad = $_GET['edad'];
echo "Hola Te llamas $nombre y tienes $edad
años";
include "pie.php";
?>