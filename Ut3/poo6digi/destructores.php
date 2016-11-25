<?php
echo "Destructores<br /><br /><br />";

// Definici�n de la clase ClaseBase
class ClaseBase {
	//  destructor de la clase ClaseBase 
	// Este destructor se ejecuta s�lo en dos casos:
	// cuando se libera un objeto de la clase ClaseBase
	// o cuando se llama expl�citamente desde una clase hija
	// con la sintaxis parent::__desstruct()

	function __destruct() {
	    echo "�ste es el destructor de la clase base " .
        " ClaseBase<BR>";
	}
}	

// Definici�n de la clase ClaseHija1
class ClaseHija1 extends ClaseBase {
 	
	// destructor de la clase ClaseHija1
	// Este destructor se ejecuta cuando se libera 
	// un objeto de la clase ClaseHija1

	function __destruct() {
	    echo "Llamada autom�tica al destructor de la clase " .
          "hija ClaseHija1<BR>";

		// aqu� se podr�a llamar expl�citamente al 
        // destructor de la clase base
	}
}	

// Definici�n de la clase ClaseHija2
class ClaseHija2 extends ClaseBase {
 	
	// destructor de la clase ClaseHija2 
	function __destruct() {
	    echo "Llamada autom�tica al destructor de la clase " .
         " hija ClaseHija2<BR>";
		// aqu� se llama expl�citamente al destructor de 
        // la clase base 
		echo "<B>Atenci�n:</B>Llamada expl�cita desde la clase " .
         " hija ClaseHija2<BR>";
		parent::__destruct();
	}
}
	
// observar ahora los mensajes de los constructores
echo "<BR>Se crea un ejemplar de la clase base ClaseBase<BR>";
$base = new ClaseBase;
 
// aqu� se libera el objeto $base, por lo que
// se activa el destructor (pero si el objeto mantiene 
// referencias activas la funci�n unset() no activar�
// el destructor, simplemente liberar� el objeto pero
// el m�todo destruct() no se ejecutar�

unset($base);

echo "<BR>Se crea un ejemplar de la clase hija ClaseHija1<BR>";
$hija1 = new ClaseHija1;

echo "<BR>Se crea un ejemplar de la clase hija ClaseHija2<BR>";
$hija2 = new ClaseHija2;

// al finalizar las secuencias de comandos se liberan 
// todos los objetos aqu� se activan los destructores de los objetos
Print "<BR><B>Fin de la secuencia de comandos.</B><BR><BR>" 

?>