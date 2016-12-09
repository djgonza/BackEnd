<?php

require_once 'empleado.php';

class PruebaPolimorf{
    
    static function calcular(Empleado $empleado){ 
    	return $empleado->ingresos();
    }
}

?>

