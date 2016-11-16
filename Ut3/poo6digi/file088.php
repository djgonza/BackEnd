<?php
echo "M�todo final  (ejemplo file088.php)<br /><br /><br />";

// Clase con un m�todo final 
// sirve para indicar que no puede ser reemplazado 
  
class MiClase {
	public $saludo;
	final function saludar() {
		echo $this->saludo ."<BR>";
	} 
}	
// Subclase o clase derivada

//Pero no se puede implementar un m�todo definido como final

class MiSubClase extends MiClase {
	public $despedida;
	// la definici�n de este m�todo produce un error fatal
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
// la que tiene un m�todo final  
 
$obj = new MiSubClase();

$obj->saludo = "Hola, �c�mo estamos?<BR><BR>";
 
$obj->saludar();

?>
