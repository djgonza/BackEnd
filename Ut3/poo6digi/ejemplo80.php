<?php

require_once "class/MiClase.php";

echo "Definición de una clase (ejemplo80.php)<br /><br /><br />";

echo "Prueba PHPt<br>";

$obj = new MiClase();

//$obj->publ = "MOdificación 1 <br> ";
//echo "1 ¿Qué hay en la propiedad publ?" - $obj->publ. " <br>" ;
    
//$obj->metPublic("MOdificación 2");
//echo "2 ¿Qué hay en la propiedad publ?" - $obj->publ. " <br>" ;
//echo "3 ¿Qué hay en la propiedad publ?" - $obj->priva. " <br>" ;
$obj->metPublic2("MOdificación 6");

echo "última sentencia del script!<br> ";
?>
