<?php
echo "Clonaci�n de objetos (ejemplo file097.php)<br /><br /><br />";

// Definici�n de la clase Prueba
class Prueba {
 	static $contador = 0;

	function __construct() {
	        echo "<BR>entra a construct: " . self::$contador . "<BR>";
                self::$contador++;
	}

	function __clone() {
		echo "<BR>entra a clone: " . self::$contador ."<BR>";
                self::$contador++;
	 	$this->cliente = "nuevo cliente";
		$this->direccion = "nueva direccion";
	}
	  
}	

 
$objPrueba = new Prueba;

$objPrueba->cliente = "cliente original";
$objPrueba->direccion = "direcci�n original";
echo "Objeto original<BR>";

// el objeto original
echo "Contador " . Prueba::$contador . "<BR>";
echo $objPrueba->cliente . "<BR>"; 
echo $objPrueba->direccion . "<BR>"; 

$CloPrueba = clone $objPrueba;
echo "<BR>Objeto clonado<BR>";

// el objeto clonado
echo "Contador " . Prueba::$contador . "<BR>";
echo $CloPrueba->cliente . "<BR>"; 
echo $CloPrueba->direccion . "<BR>"; 
?>