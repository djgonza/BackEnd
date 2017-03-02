<?php 

class WPE_Validator {

	private $validatorRules;
	private $errors;
	private $status;

	public function WPE_Validator () {

		$this->errors = [];
		$this->status = false;

	}

	public function setValidatorRules ($validatorRules) {
		//var_dump($validatorRules);
		$this->validatorRules = $validatorRules;
	}

	public function validate ($campos) {
		
		foreach ($this->validatorRules as $nombreCampo => $reglaCampo) {

			foreach ($reglaCampo as $nombreRegla => $valorRegla) {

				if (isset($campos[$nombreCampo])) {
					$valor = $campos[$nombreCampo];
					if (empty($valor) && $valorRegla) {
						$this->addError("El valor $nombreCampo es requerido");
					}

					if ($nombreRegla == "min" && $valor < $valorRegla) {
						$this->addError("La edad min es $valorRegla");
					}
					
				} else {

					$this->addError("El valor $nombreCampo es requerido");

				}

			}

		}

		if (count($this->getErrors()) == 0) {
			$this->status = true;
		}

	}

	public function isValid() {
		return $this->status;
	}

	public function addError ($error) {
		$this->errors[] = $error;
	}

	public function getErrors () {
		return $this->errors;
	}

}

?>