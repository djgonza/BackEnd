<?php
echo "Simulación de sobrecarga de métodos (ejemplo file095.php)<br /><br /><br /";

// Definición de la clase Prueba
class Prueba {
    public $resultado;

	function __call($met, $var){
		// en el parámetro $met se recibe el nombre del método
		//  en el parámetro $var se recibe una matriz con los
		// parámetros utilizados en la llamada al método 

		if ($met == "test") {
		// aqui incluimos una lógica para gestionar la
		// sobrecarga
		
			// si la variable es integer se llama
			// a la función test para numéricos
			if (gettype($var[0]) == "integer"){
				$this->test_numérico($var);
			}
			// caso contrario, se llama a la función
			// test para cadenas
			else {
				$this->test_cadena($var);
			}
		} 
	}

	// función privada para tratar parámetro integer
	private function test_numérico($var){
	    $this->resultado = $var[0] * 5;
	}

	// función privada para tratar parámetro cadena
	private function test_cadena($var){
	    $this->resultado = $var[0] . " es texto";
	}   
}	
$a = new Prueba;

// la sobrecarga de métodos significa llamar a un mismo método
// pero con distintos tipos de parámetros o con distinta
// cantidad de parámetros

// Aqui siempre se llama al método Test
// el método en realidad no existe, pero en la clase
// está definido el método __call que recibe las llamadas a
// métodos no existentes, 
// alli podremos colocar la lógica necesaria para simular
// la sobrecarga de métodos

$a->test(8);  // se usa el método test con números

echo "Método test: proceso con argumento numérico: " . 
   $a->resultado . "<BR>"; 

$a->test("Esto "); // se usa el método test con cadenas

echo "Método test: proceso con argumento de cadena: " . 
   $a->resultado . "<BR>"; 
?>