<?php
echo "Simulaci�n de sobrecarga de m�todos (ejemplo file095.php)<br /><br /><br /";

// Definici�n de la clase Prueba
class Prueba {
    private $resultado;

	function __call($met, $var){
		// en el par�metro $met se recibe el nombre del m�todo
		//  en el par�metro $var se recibe una matriz con los
		// par�metros utilizados en la llamada al m�todo 

		if ($met == "test") {
		// aqu� incluimos una l�gica para gestionar la
		// sobrecarga
		
			// si la variable es integer se llama
			// a la funci�n test para num�ricos
			if (gettype($var[0]) == "integer"){
				$this->test_numerico($var);
			}
			// caso contrario, se llama a la funci�n
			// test para cadenas
			else {
				$this->test_cadena($var);
			}
		} 
	}

	// funci�n privada para tratar par�metro integer
	private function test_numerico($var){
	    $this->resultado = $var[0] * 5;
	}

	// funci�n privada para tratar par�metro cadena
	private function test_cadena($var){
	    $this->resultado = $var[0] . " es texto";
	}   
}	
$a = new Prueba;

// la sobrecarga de m�todos significa llamar a un mismo m�todo
// pero con distintos tipos de par�metros o con distinta
// cantidad de par�metros

// Aqu� siempre se llama al m�todo Test
// el m�todo en realidad no existe, pero en la clase
// est� definido el m�todo __call que recibe las llamadas a
// m�todos no existentes, 
// all� podremos colocar la l�gica necesaria para simular
// la sobrecarga de m�todos

$a->test(8);  // se usa el m�todo test con n�meros

echo "M�todo test: proceso con argumento num�rico: " . 
   $a->resultado . "<BR>"; 

$a->test("Esto "); // se usa el m�todo test con cadenas

echo "M�todo test: proceso con argumento de cadena: " . 
   $a->resultado . "<BR>"; 
?>