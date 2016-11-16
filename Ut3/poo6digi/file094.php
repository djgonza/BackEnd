<?php
echo "Constantes de clases (ejemplo file094.php)<br /><br /><br />";

// Definición de la clase MisConstantes
class MisConstantes {
	const pi = 3.14156;
	const cero_absoluto = -273;
	
}	
$diámetro = 12;

// Para usar la constante no hace falta crear un ejemplar 
$perímetro = $diámetro * MisConstantes::pi;

echo "El perímetro es  $perímetro ";
  
?>