<?php

class ValidadorForm {

    private $errores;
    private $reglasValidacion;
    private $valido;

    function ValidadorForm() {
        $this->errores = array();
        $this->reglasValidacion = null;
        $this->valido = false;
    }

    function validar($campos, $reglasValidacion) {
        $this->reglasValidacion = $reglasValidacion;
        foreach ($reglasValidacion as $nombreCampo => $reglaCampo) {
            foreach ($reglaCampo as $nombreRegla => $valorRegla) {
                if (isset($campos[$nombreCampo])) {
                    $valor = $campos[$nombreCampo];
                    if (empty($valor) && $valorRegla) {
                        $this->addError($nombreCampo, "El valor $nombreCampo es requerido");
                    }

                    if ($nombreRegla == "min" && $valor < $valorRegla) {
                        $this->addError($nombreCampo, "La edad min es $valorRegla");
                    }
                    
                } else {

                    $this->addError($nombreCampo, "El valor $nombreCampo es requerido");
                }
            }
        }
        if (count($this->getErrores()) == 0) {
            $this->valido = true;
        }
    }

    function addError($campo, $error) {

        $this->errores[$campo] = $error;
    }

    function esValido() {
        return $this->valido;
    }

    function getErrores() {
        return $this->errores;
    }

    function getMensajeError($campo) {
        if (isset($this->errores[$campo])) {
            return $this->errores[$campo];
        }
        return "";
    }

}

?>
