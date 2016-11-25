<?php
echo "__autoload() (ejemplo file106.php)<br /><br /><br />";

// �ste es un modo de hacerlo sin __autoload()
//include_once "Personas.php";

function __autoload($varClase) {
	// con este echo veremos cu�ntas veces se invoca a la 
   // funci�n autoload()
	// Ser� s�lo una vez, porque el archivo Personas.php contiene la
	// declaraci�n de las dos clases del programa

	echo "<BR>** Entr� a la funci�n __autoload()**<BR><BR>";

	// la l�gica dentro de la funci�n __autoload() es libre
	// lo habitual es incluir la definici�n de la clase faltante

	if ($varClase == "Empleado" or $varClase == "Persona") {
		include_once "Personas.php";
	}	
	else {
		include_once $varClase . ".php";
	}	 
}

// la clase Persona no est� declarada dentro de la 
// secuencia de comandos vigente en lugar de producirse un error, 
// la unci�n __autoload lo intercepta
// y se ejecuta. El par�metro que recibe la funci�n es el nombre 
// de la clase que no est� definida en el script

$obj = new Persona(122,"Jos� P�rez");
$obj->listar();

// como la clase Empleado est� definida dentro del archivo 
// Personas.php cuando se hace referencia a la clase Empleado, 
// PHP detecta que la clase ya 
// est� definida, ya que se carg� junto con la clase Persona

$obj = new Empleado(99123,"Juan Fern�ndez","Recursos humanos");
$obj->listar();

?>