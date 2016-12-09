<?php 

class ValidadorForm {

	private $errores = array();
	private $reglasValidacion = null;
	private $valido = true;

	public function ValidadorForm (){		
	
		$this->crearReglasDevalidacion();

	}

	public function crearReglasDevalidacion() {

		$this->reglasValidacion = array(
			"Nombre" => array("required" => true),
			"Apellido" => array("required" => true),
			"Edad" => array(
				"required" => true,
				"min" => 18
			),
			"Modulo" => array("required" => false),
			"Nota" => array("required" => true)
		);

	}

	public function validar() {

		foreach ($this->reglasValidacion as $key => $value) {
			
			if ((!isset($_POST[$key]) || $_POST[$key] == "") && $value["required"] == true){
				$this->errores[] = "El campo ".$key." es requerido";
				$this->valido = false;
			}

		}

		return $this->valido;

	}

	public function addError ($nombreCampo, $error) {
		$this->errores[$nombreCampo] = $error;
	}

	public function esValido () {
		return $this->valido;
	}

	public function getErrores () {
		return $this->errores;
	}

	public function getMensajeError ($campo) {
		
		if(isset($this->errores[$campo])){
			return $this->errores[$campo];
		}

	}

}

?>