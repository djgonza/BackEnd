<?php
echo "Constantes de clases (ejemplo file094.php)<br /><br /><br />";

// Definici�n de la clase MisConstantes
class MisConstantes {
	const pi = 3.14156;
	const cero_absoluto = -273;
	
}	
$di�metro = 12;

// Para usar la constante no hace falta crear un ejemplar 
$per�metro = $di�metro * MisConstantes::pi;

echo "El per�metro es  $per�metro ";
  
?>