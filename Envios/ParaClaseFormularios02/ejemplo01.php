<?php

require_once 'utilidades.php';

switch ($_POST["edad"]) {
	case 'uno':
		$resultado = "Te llamas ".$_POST["nombre"]." y tu edad esta Entre 1 y 18";
		break;
	case 'dos':
		$resultado = "Te llamas ".$_POST["nombre"]." y tu edad esta Entre 18 y 65";
		break;
	case 'tres':
		$resultado = "Te llamas ".$_POST["nombre"]." y tu edad es Mayor de 65";
		break;
}
    
include "resultado.php";
    
?>
