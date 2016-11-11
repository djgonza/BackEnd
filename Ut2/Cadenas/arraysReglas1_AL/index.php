<?php

include "funciones.php";

include 'cabecera.php';

// Crea un array con las siguientes claves: nombre apellidos y edad 
// cada uno de los campos será un array que contendrá las reglas de validación 
// que queremos establecer en los datos: en este caso solo required (valor false o true )


//Dar valores a los campos en un array
include "registro.php";

//Validar los datos: llamar a la función Validar
echo "<h3>Registro Uno</h3>";
verArray(validar($registroUno));
echo "<h3>Registro Dos</h3>";
$validacion = array(
	"nombre" => "opcional",
	"apellidos" => "required",
	"edad" => "required"
);
verArray(validarDos($validacion, $registroDos));

//Muestro el resultado, si hay errores o no

include 'pie.php';

?>

