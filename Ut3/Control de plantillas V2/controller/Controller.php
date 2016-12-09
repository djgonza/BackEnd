<?php 

/**
* 
*/
class Controller {
	
	function run () {

		//var_dump($_POST);

		$this->mostrarForm ();

		if(isset($_POST["btnEnviar"])){

			$this->mostrarResultado ();

		}

	}

	function mostrarForm () {

		include "views/form_alumno.php";

	}

	function mostrarResultado () {

		include "views/cabecera.html";

		$resultado = "";

		$resultado .= "<p>Nombre: ".$_POST['name']." ".$_POST['sName']."</p>";
		$resultado .= "<p>Módulo: ".$_POST['module']."</p>";
		$resultado .= "<p>Nota: ".$_POST['nota']."</p>";

		echo $resultado;

		include "views/pie.html";

	}

}

?>