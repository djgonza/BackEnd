<?php
echo "Interfaces (ejemplo file089.php)<br /><br /><br />";

// Definición de la clase Persona
class Persona {
	// Identificación de la persona
	public $dni;
	public $nombre;
	function Persona($var_dni, $var_nombre) {
	    $this->dni = $var_dni;
		$this->nombre = $var_nombre;
	}
}
	
// la clase empleado extiende la clase persona e implementa 
// la interfaz Imprimir

class Empleado extends Persona implements Imprimir  {
	//   
	public $departamento;

	function Empleado($var_departamento, $var_dni, $var_nombre) {
	    $this->departamento = $var_departamento;
		parent::__construct($var_dni, $var_nombre);
	}

	// esta función se debe implementar obligatoriamente
	// porque la clase Empleado implementa la interfaz Imprimir

	function imprimir(){
		echo "Empleado " . ($this->nombre) . "<BR><BR>";
	}
}	
// La clase que implemente la interfaz Imprimir deberá forzosamente
// implementar la función imprimir

Interface Imprimir {
	function imprimir();
}
 
// Se crea un objeto Empleado
$emp = new Empleado("Contabilidad","44423899","José Pérez");

// se usa el método de la clase Empleado
$emp->imprimir();

// el objeto $emp es de tipo Empleado, Persona e Imprimir

if ($emp instanceof Empleado) {
	echo "El objeto \$emp es de tipo Empleado.<BR>";}

if ($emp instanceof Persona) {
	echo "pero también es de tipo Persona (por derivar de " .
     "esta clase).<BR>";}

if ($emp instanceof Imprimir) {
	echo "Y también es de tipo Imprimir (por implementar " . 
     "esta interfaz).<BR>";}
 
?>