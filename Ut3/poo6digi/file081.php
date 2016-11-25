<?php
echo "Acceso a una variable miembro est�tica  (ejemplo file081.php)<br /><br /><br />";

// Clase
class MiClase {
	static $var = 6;
}

// se usa sin crear la instancia de la clase
// Tiene un valor inicial igual a 6	
// sintaxis clase::variable
Print MiClase::$var ."<BR>";

// se modifica la variable de clase est�tica
MiClase::$var = 7; 
 
Print MiClase::$var ."<BR>";
 
?>