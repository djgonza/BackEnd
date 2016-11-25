<?php

require_once "class/MiClaseAbstract.php";

echo "Métodos abstractos (ejemplo86.php)<br /><br /><br />";
echo "Clases abstractas <br><br>";

$obj = new MiSubClase();
$obj->saludo = "Hola, ¿Cómo estás?<br><br>";
$obj->saludar();

echo "Última sentencia del script! ";
?>
