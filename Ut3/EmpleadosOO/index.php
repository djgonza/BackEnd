<?php

require_once 'clases/empleadoPorComision.php';
require_once 'clases/empleadoAsalariado.php';
require_once 'clases/pruebaPolimorf.php';
require_once 'clases/empresa.php';

$objUno = new EmpleadoPorComision("Pepe", "Garcia", "1257", 30, 40);
$objDos = new EmpleadoAsalariado("Maria", "Perez", "3210", 8, 12);

$objUno->mostrar();
echo "<p> Ingresos: " .$objUno->ingresos()."</p>";
echo "<hr />";
$objDos->mostrar();
echo "<p> Ingresos: " .$objDos->ingresos()."</p>";
echo "<hr />";
$empleadoComision = new EmpleadoPorComision("Manolo", "Gorroz", "4568", 20, 45);
$empledoAsalariado = new EmpleadoAsalariado("Pepa", "Palotes", "1258", 58, 98);

echo "El empleado por comision tiene un salario de: " .PruebaPolimorf::calcular($empleadoComision);
echo "<br />";
echo "El empleado asalariado tiene un salario de:  " . PruebaPolimorf::calcular($empledoAsalariado);
echo "<hr />";
$empresa= new Empresa();
$empresa->addEmpleado($empleadoComision);
$empresa->addEmpleado($empledoAsalariado);

$empresa->listarEmpleados();
$empresa->listarIngresos();
$empresa->empleadoMasIngresos();

?>

