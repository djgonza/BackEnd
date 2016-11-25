<?php

require_once "class/MiSubclase.php";

echo "Constructor en la clase derivada (ejemplo83.php)<br /><br /><br />";
echo "Primer ejemplo <br><br>";

$obj = new MiSubClase();
$obj->saludo="Hola, ¿Cómo estás?<br>";
$obj->saludar();
$obj->despedida="ADIOS!!<br><br><br>";
$obj->despedirse();

echo "Segundo ejemplo <br><br>";

$obj2 = new MiClase();
$obj2->despedida="ADIOS!!<br>";
$obj2->despedirse();
        
        
echo "Última sentencia del script!<br> ";
?>
