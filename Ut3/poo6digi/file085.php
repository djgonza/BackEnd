<?php
echo "Clases abstractas  (ejemplo file085.php)<br /><br /><br />";

// Clase abstracta 
// sirve para ser derivada pero no se pueden
// crear ejemplares de esta clase

abstract class MiClase {
	private $saludo;
	function __construct(){
		echo "Se est� ejecutando el constructor en la " .
          "clase MiClase<BR>";		
	} 
	function __destruct(){
		echo "Se est� destruyendo un objeto de la clase " .
         " MiClase<BR>";
	}
 
	function saludar() {
		echo $this->saludo;
	}

}	
// Subclase o clase derivada
class MiSubClase extends MiClase {
	private $despedida;
        	function __construct(){
		echo "Se est� ejecutando el constructor de un objeto " .
          " de la subclase MiSubClase<BR>";
	} 

	function __destruct(){
		echo "Se est� destruyendo un objeto de la clase " .
          " MiSubClase<BR>";
	} 

	function despedirse() {
		echo $this->despedida ."<BR>";
	}
}

// se crea un objeto de clase MiSubClase
// al ser una clase derivada de la clase abstracta MiClase    
$obj = new MiSubClase();

$obj->saludo = "Hola, �c�mo estamos?<BR><BR>";
$obj->saludar();
 
// Pero, �Qu� pasa si intento generar un objeto de la clase
// MiClase que es abstracta? 

echo "<B>Intento de generar un ejemplar de una clase abstracta...</B><BR>";
$obj2 = new MiClase(); 
 
?>
