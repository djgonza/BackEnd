<?php 

/**
* 
*/
class Controller {
	
	function run () {

		//var_dump($_POST);

		if(isset($_POST["btnEnviar"])){

			$resultado = "";

			$resultado .= "<p>Nombre: ".$_POST['name']." ".$_POST['sName']."</p>";
			$resultado .= "<p>Módulo: ".$_POST['module']."</p>";
			$resultado .= "<p>Nota: ".$_POST['nota']."</p>";

			$this->mostrarResultado($resultado);

		}else{

			$this->mostrarForm();
		}
		

	}

	function mostrarForm () {

		include "views/form_alumno.php";

	}

	function mostrarResultado ($resultado) {

		include "views/resultado.php";

	}

}

?>