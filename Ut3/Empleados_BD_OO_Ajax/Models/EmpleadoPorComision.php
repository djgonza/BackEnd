<?php

class EmpleadoPorComision extends Empleado {

    private $ventasBrutas;
    private $tarifaComision;
    private $fijo;

    function EmpleadoPorComision($var_primerNombre, $var_apellido, $var_numeroSeguroSocial, $var_fijo, $var_ventasBrutas, $var_tarifaComision)
    {
        parent::__construct($var_primerNombre, $var_apellido, $var_numeroSeguroSocial);
        $this->ventasBrutas = $var_ventasBrutas;
        $this->tarifaComision = $var_tarifaComision;
        $this->fijo = $var_fijo;
    }

    function getFijo ()
    {
        return $this->fijo;
    }

    function getVentasBrutas()
    {
        return $this->ventasBrutas;
    }

    function getTarifaComision()
    {
        return $this->tarifaComision;
    }

    function setVentasBrutas($ventasBrutas)
    {
        $this->ventasBrutas = $ventasBrutas;
    }

    function setTarifaComision($tarifaComision)
    {
        $this->tarifaComision = $tarifaComision;
    }

    function ingresos()
    {
        return $this->getVentasBrutas() * $this->getTarifaComision();
    }


}
?>

