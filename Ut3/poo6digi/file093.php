<?php
echo "Comprobación de tipos (ejemplo file093.php)<br /><br /><br />";

// Definición de la clase Factura
class Factura {
	// Número de la factura
	public $número;
	public $fecha;

	// matriz de objetos lineas de detalle (Linea_Detalle)
	public $lineas;

	function Factura($var_número, $var_fecha) {
	    $this->número = $var_número;
		$this->fecha = $var_fecha;
	}

	function agregar_linea(Linea_Detalle $linea_detalle) {
		$this->lineas[] = $linea_detalle;
	}

	function obtener_lineas() {
		return ($this->lineas);
	}
}
	
// Definición de la clase Linea_Detalle
class Linea_Detalle {
	// Una propiedad publica
	public $cantidad;
	public $producto;

	function Linea_Detalle($var_cantidad, $var_producto) {
		// constructor de la clase Linea_Detalle
	    $this->cantidad = $var_cantidad;
		$this->producto = $var_producto;
	}
}
	
// Se crea un objeto Factura
$fac = new Factura("21001","20/04/2004");

// se crea un objeto linea de detalle
$lin = new Linea_Detalle(6,"peras");

// se agrega la linea a la factura
$fac->agregar_linea($lin); //se envia un objeto Linea_Detalle

// se crea otra linea de detalle
$fac->agregar_linea(12, "manzanas"); // ¡PERO NO SE ENVÏA UN 
                                 // OBJETO LiNEA_DETALLE! 

// obtención de todas las lineas de factura
echo "<U><B>contenido de las lineas de detalle </U></B><BR>";
foreach (($fac->obtener_lineas()) as $value){ 
	echo  ("cantidad: " . $value->cantidad . " unidades -  " .  
      " producto: " .$value->producto . "<BR>");
}	
 
?>