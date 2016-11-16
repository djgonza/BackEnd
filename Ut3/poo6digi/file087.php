<?php
echo "Clase final  (ejemplo file087.php)<br /><br /><br />";

// Clase final 
// sirve para indicar que no puede ser derivada   
final class MiClase {
	public $saludo;
	
	function saludar() {
		echo $this->saludo ."<BR>";
	} 
	
}	
// Subclase o clase derivada

//Pero no se puede extender una clase definida como final
class MiSubClase extends MiClase {
	public $despedida;
	function despedirse() {
		echo $this->despedida ."<BR>";
	}
}

echo "Intento de creación un objeto de una clase derivada de una clase final";

// se intenta crear un objeto de clase MiSubClase
// una clase derivada de la clase final MiClase 
  
$obj = new MiSubClase();

$obj->saludo = "Hola, ¿cómo estamos?<BR><BR>";
 
$obj->saludar();

?>