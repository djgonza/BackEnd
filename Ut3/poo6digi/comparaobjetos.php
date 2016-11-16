<?php
echo "Comparación de objetos<br /><br /><br />";

// Definición de la clase Prueba
class Prueba {
	public $contador;

	//  constructor de la clase Prueba 
	function Prueba() {
	    $this->contador = 1;
	}
}	
// La clase Prueba2 es similar a la clase Prueba
// pero la realidad es que lo importante es que son 
// clases diferentes

class Prueba2 {
	public $contador;
	//  constructor de la clase Prueba2 
	function Prueba2() {
	    $this->contador = 1;
	}
}
	
echo "o1 es un ejemplar de clase Prueba<BR>";
echo "o2 es otro ejemplar de clase Prueba<BR>";
echo "o3 es otra referencia al ejemplar o1 de la clase Prueba<BR>";
echo "o4 es un ejemplar de otra clase Prueba2, aunque con las mismas propiedades y métodos que la clase Prueba<BR>";

$o1 = new Prueba;
$o2 = new Prueba;
$o3 = $o1;

// la clase Prueba2 es idéntica en contenido de propiedades
// y métodos a la clase Prueba
// pero, aún así, son distintas. Ya que son clases distintas.
echo "<BR><B>Comparemos</B><BR><BR>";
$o4 = new Prueba2;

// o1 y o2 son dos ejemplares diferentes
if ($o1 == $o2){
	echo "o1 y o2 son iguales<BR>";
} 
 
if ($o1 !== $o2){
	echo "o1 y o2 no son idénticos<BR>";
}
// o1 y 03 son dos referencias al mismo ejemplar 
// (obviamente, de la misma clase)
if ($o1 == $o3){
	echo "o1 y o3 son iguales<BR>";
} 
 
if ($o1 === $o3){
	echo "<B>o1 y o3 son idénticos</B><BR>";
}
// 02 y 03 son ejemplares diferentes de la misma clase
if ($o2 == $o3){
	echo "o2 y o3 son iguales<BR>";
}  

if ($o2 !== $o3){
	echo "o2 y o3 no son idénticos<BR>";
} 

// o1 y 04 son ejemplares de clases diferentes     
if ($o1 != $o4){
	echo "o1 y o4 no son iguales<BR>";
}  

if ($o1 !== $o4){
	echo "o1 y o4 no son idénticos<BR>";
} 
      
?>