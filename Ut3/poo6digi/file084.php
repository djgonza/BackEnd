<?php
echo "Acceso a la clase base desde la clase derivada  (ejemplo file084.php)<br /><br /><br /";

// Clase
class MiClase {
	public $saludo;

	function MiClase(){
		echo "Se está ejecutando el constructor en la clase " .
         " MiClase<BR>";		
	} 

	function __destruct(){
		echo "Se está destruyendo un objeto de la clase " .
         " MiClase<BR>";
	}
        function saludar() {
		echo $this->saludo;
	}
}	

// Subclase o clase derivada
class MiSubClase extends MiClase {
	public $despedida;
	function MiSubClase(){
		echo "Se está ejecutando el constructor de un objeto de la subclase MiSubClase<BR>";
	    // Se fuerza la llamada al constructor de la clase base
		parent::MiClase();
	} 
	function __destruct(){
		echo "Se está destruyendo un objeto de la clase MiSubClase<BR>";
	} 
	function despedirse() {
		echo $this->despedida ."<BR>";
	}
}
echo "Primer ejemplo<BR><BR>";
// se crea un objeto de clase MiSubClase
// al ser una clase derivada de MiClase, la clase MiSubClase
// posee todos los métodos y las propiedades de su clase base MiClase y
// además los métodos y propiedades propios
$obj = new MiSubClase();
// Podemos comprobar que  se produce una llamada forzada 
// al constructor de la clase base

// El objeto $obj es de clase MiSubClase pero igualmente
// puedo utilizarlo para hacer referencia a la propiedad
// saludo y al método saludar que son de su clase base
$obj->saludo = "Hola, ¿cómo estamos?<BR>";
$obj->saludar();

// El objeto $obj es de clase MiSubClase por lo que
// puedo utilizar sus propiedades y métodos (despedida y despedir)
$obj->despedida = "Adiós<BR>";
$obj->despedirse(); 
 
?>


