<?php
echo "Interfaces (ejemplo file089.php)<br /><br /><br />";

// Definici�n de la clase Persona
class Persona {
	// Identificaci�n de la persona
	private $dni;
	private $nombre;
	function __construct($var_dni, $var_nombre) {
	    $this->dni = $var_dni;
		$this->nombre = $var_nombre;
	}
}
	
// la clase empleado extiende la clase persona e implementa 
// la interfaz Imprimir

class Empleado extends Persona implements Imprimir  {
	//   
	private $departamento;

	function __construct($var_departamento, $var_dni, $var_nombre) {
	    $this->departamento = $var_departamento;
		parent::__construct($var_dni, $var_nombre);
	}

	// esta funci�n se debe implementar obligatoriamente
	// porque la clase Empleado implementa la interfaz Imprimir

	function imprimir(){
		echo "Empleado " . ($this->nombre) . "<BR><BR>";
	}
}	
// La clase que implemente la interfaz Imprimir deber� forzosamente
// implementar la funci�n imprimir

Interface Imprimir {
	function imprimir();
}
 
// Se crea un objeto Empleado
$emp = new Empleado("Contabilidad","44423899","Jos� P�rez");

// se usa el m�todo de la clase Empleado
$emp->imprimir();

// el objeto $emp es de tipo Empleado, Persona e Imprimir

if ($emp instanceof Empleado) {
	echo "El objeto \$emp es de tipo Empleado.<BR>";}

if ($emp instanceof Persona) {
	echo "pero tambi�n es de tipo Persona (por derivar de " .
     "esta clase).<BR>";}

if ($emp instanceof Imprimir) {
	echo "Y tambi�n es de tipo Imprimir (por implementar " . 
     "esta interfaz).<BR>";}
 
?>