<?php
echo "Comprobaci�n de tipos (ejemplo file093.php)<br /><br /><br />";

// Definici�n de la clase Factura
class Factura {
	// N�mero de la factura
	private $numero;
	private $fecha;

	// matriz de objetos l�neas de detalle (L�nea_Detalle)
	private $lineas;

	function __construct($var_numero, $var_fecha) {
	    $this->numero = $var_numero;
		$this->fecha = $var_fecha;
	}

	function agregar_linea(linea_Detalle $linea_detalle) {
		$this->lineas[] = $linea_detalle;
	}

	function obtener_lineas() {
		return ($this->lineas);
	}
}
	
// Definici�n de la clase L�nea_Detalle
class Linea_Detalle {
	// Una propiedad privatea
	private $cantidad;
	private $producto;

	function __construct($var_cantidad, $var_producto) {
		// constructor de la clase L�nea_Detalle
	    $this->cantidad = $var_cantidad;
		$this->producto = $var_producto;
	}
}
	
// Se crea un objeto Factura
$fac = new Factura("21001","20/04/2004");

// se crea un objeto l�nea de detalle
$lin = new Linea_Detalle(6,"peras");

// se agrega la l�nea a la factura
$fac->agregar_linea($lin); //se env�a un objeto L�nea_Detalle

// se crea otra l�nea de detalle
$fac->agregar_linea(12, "manzanas"); // �PERO NO SE ENV�A UN 
                                 // OBJETO L�NEA_DETALLE! 

// obtenci�n de todas las l�neas de factura
echo "<U><B>contenido de las l�neas de detalle </U></B><BR>";
foreach (($fac->obtener_lineas()) as $value){ 
	echo  ("cantidad: " . $value->cantidad . " unidades -  " .  
      " producto: " .$value->producto . "<BR>");
}	
 
?>