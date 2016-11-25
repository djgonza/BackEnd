<?php
echo "Constructores <br /><br /><br />";

// Definici�n de la clase ClaseBase
class ClaseBase {
	// constructor de la clase ClaseBase 
	// Este constructor se ejecuta s�lo en dos casos:
	// cuando se crea un objeto de la clase ClaseBase
	// o cuando se llama expl�citamente desde una clase hija
	// con la sintaxis parent::__construct()

	function __construct() {
	    echo "Este es el constructor de la clase " .
        " base ClaseBase<BR>";
	}
}	

// Definici�n de la clase ClaseHija1
class ClaseHija1 extends ClaseBase {
 	
	// constructor de la clase ClaseHija1
	// Este constructor se ejecuta cuando se crea 
	// un objeto de la clase ClaseHija1

	function __construct() {
	    echo "Este es el constructor de la clase hija " . 
         " ClaseHija1<BR>";
		// aqu� se podr�a llamar expl�citamente 
        // al constructor de la clase base
	}
}	

// Definici�n de la clase ClaseHija2
class ClaseHija2 extends ClaseBase {
 	
	// constructor de la clase ClaseHija2 
	// observar que se utiliza la vieja sintaxis para hacer 
   // referencia al constructor, es decir, se usa el nombre de 
   // la propia clase esto es igual a haber codificado lo siguiente:
	// function __construct(){ 
	// se recomienda utilizar el nombre de m�todo __construct()
 
	function ClaseHija2() {
	    echo "Este es el constructor de la clase hija " . 
         " ClaseHija2<BR>";

		// aqu� se llama expl�citamente al constructor 
        // de la clase base 
		parent::__construct();
	}
}	

// observar ahora los mensajes de los constructores
echo "<BR>Se crea un ejemplar de la clase base ClaseBase<BR>";
$obj = new ClaseBase; 

echo "<BR>Se crea un ejemplar de la clase hija ClaseHija1<BR>";
$obj = new ClaseHija1;

echo "<BR>Se crea un ejemplar de la clase hija ClaseHija2<BR>";
$obj = new ClaseHija2;
 
?>