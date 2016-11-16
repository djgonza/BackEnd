<?php
echo "Clonaci�n de objetos (ejemplo file097.php)<br /><br /><br />";

// Definici�n de la clase Prueba
class Prueba {
 	static $contador = 0;

	function Prueba() {
	        echo "<BR>entra a construct: " . self::$contador . "<BR>";
                self::$contador++;
	}

	function __clone() {
		echo "<BR>entra a clone: " . self::$contador ."<BR>";
                self::$contador++;
	 	$this->cliente = "nuevo cliente";
		$this->direcci�n = "nueva direcci�n";
	}
	  
}	

 
$objPrueba = new Prueba;

$objPrueba->cliente = "cliente original";
$objPrueba->direcci�n = "direcci�n original";
echo "Objeto original<BR>";

// el objeto original
echo "Contador " . Prueba::$contador . "<BR>";
echo $objPrueba->cliente . "<BR>"; 
echo $objPrueba->direcci�n . "<BR>"; 

$CloPrueba = clone $objPrueba;
echo "<BR>Objeto clonado<BR>";

// el objeto clonado
echo "Contador " . Prueba::$contador . "<BR>";
echo $CloPrueba->cliente . "<BR>"; 
echo $CloPrueba->direcci�n . "<BR>"; 
?>