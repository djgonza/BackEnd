<?php

require_once "class/MiClase.php";

echo "Acceso a una función miembro estático (ejemplo82.php)<br /><br /><br />";
echo "LONGITUD DE LA CIRCUNFERENCIA (sin instancia):". MiClase::
longitud_circunferencia(8.5)." <br>" ;

$obj = new MiClase();

echo "LONGITUD DE LA CIRCUNFERENCIA (con instancia):".
$obj->longitud_circunferencia(44.5) ."<br> ";

echo "última sentencia del script!<br> ";
?>
