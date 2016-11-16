<?php
echo "Método final  (ejemplo file088.php)<br /><br /><br />";

// Clase con un método final 
// sirve para indicar que no puede ser reemplazado 
  
class MiClase {
	public $saludo;
	final function saludar() {
		echo $this->saludo ."<BR>";
	} 
}	
// Subclase o clase derivada

//Pero no se puede implementar un método definido como final

class MiSubClase extends MiClase {
	public $despedida;
	// la definición de este método produce un error fatal
	function saludar() {
		echo $this->saludo ."<BR>";
	} 
	function despedirse() {
		echo $this->despedida ."<BR>";
	}
	function getDespedida() {
		return $this->despedida;
	}
}

// se crea un objeto de clase MiSubClase
// una clase derivada de la clase MiClase
// la que tiene un método final  
 
$obj = new MiSubClase();

$obj->saludo = "Hola, ¿cómo estamos?<BR><BR>";
 
$obj->saludar();

?>
