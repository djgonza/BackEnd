<?php require_once "helper/ValidadorForm.php"; ?>
<?php 

/**
* 
*/
class Controller {
	
	function run () {

		if(!isset($_POST["btnEnviar"])){
			$this->mostrarForm (null, false);
			exit();
		}

		
		if(isset($_POST["btnEnviar"])){
			$this->enviar();
			exit();
		}

	}

	function enviar(){

		$validacion = new ValidadorForm();

		if (!$validacion->validar()){

			$this->mostrarForm ($validacion->getErrores(), false);

		}else{

			$this->mostrarForm (null, false);

		}

	}

	function mostrarForm ($errores, $resultado) {

		include "views/form_alumno.php";

	}

}

?>