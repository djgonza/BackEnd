<?php

require_once "class/MiClase.php";

echo "Definición de una clase (ejemplo78.php)<br /><br /><br />";

echo "Primera sentencia del script<br><br>";

$obj = new MiClase();

$obj->pub = "Hola, ¿Cómo estamos?<br><br>";
$obj->saludar();
echo "Última sentencia del script! ";

?>
