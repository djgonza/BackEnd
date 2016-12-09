<?php
require_once "empleado.php";

class EmpleadoAsalariado extends Empleado {

    private $horasTrabajadas;
    private $precioHoras;

    function EmpleadoAsalariado($var_primerNombre, $var_apellido, $var_numeroSeguroSocial,
            $var_horasTrabajadas, $var_precioHoras)
    {
        parent::__construct($var_primerNombre, $var_apellido, 
                $var_numeroSeguroSocial);
        $this->horasTrabajadas = $var_horasTrabajadas;
        $this->precioHoras = $var_precioHoras;
    }

    function getHorasTrabajadas()
    {
        return $this->horasTrabajadas;
    }

    function getPrecioHoras()
    {
        return $this->precioHoras;
    }

    function setHorasTrabajadas($horasTrabajadas)
    {
        $this->horasTrabajadas = $horasTrabajadas;
    }

    function setPrecioHoras($precioHoras)
    {
        $this->precioHoras = $precioHoras;
    }

    function ingresos()
    {
        return $this -> getHorasTrabajadas() * $this -> getPrecioHoras();
    }

}
?>

