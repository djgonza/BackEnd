<?php

require_once 'empleado.php';
require_once 'pruebaPolimorf.php';

class Empresa {

    private $empleados;

    function addEmpleado(Empleado $empleado)
    {
        $this->empleados[] = $empleado;
    }

    function listarEmpleados()
    {
        foreach ($this->empleados as $empleado)
        {
            $empleado->mostrar();
        }
    }

    function listarIngresos()
    {

        foreach ($this->empleados as $empleado)
        {

            echo "<p>" . $empleado->ingresos() . "</p>";
        }
    }

    function empleadoMasIngresos()
    {
        $salario = 0;
        $indice = 0;
        foreach ($this->empleados as $key => $value)
        {
            if (PruebaPolimorf::calcular($value) > $salario)
            {
                $salario = PruebaPolimorf::calcular($value);
                $indice = $key;
            }
        }
        $this->empleados[$indice]->mostrar();
        
    }

}
?>

