<?php
	// EJEMPLO PARA ENSEÑAR
    require_once "libreria/funciones.php";
    // Aquí se concentra la lógica de toda la aplicaci�n
    if (!isset($_POST["enviar"])) // no se ha enviado el formulario                      
    {
        include "vistas/saludo.php";
        exit();
    }
 // se ha enviado, hay que procesarlo
        $nombre = htmlspecialchars(trim($_POST["nombre"]), ENT_QUOTES, 'ISO-8859-1');
        $dni = htmlspecialchars(trim($_POST["dni"]), ENT_QUOTES, 'ISO-8859-1');
        $errores = validar_formulario($nombre, $dni); // Aquí generamos los distintos mensajes de error
        if (!empty ($errores)) //   hay errores
        {
            include "vistas/saludo.php"; // mostramos el formulario con los errores
            exit();
        }
        $salida = "Bienvenido/a ".$nombre." | DNI: ".$dni;
                  
        include "vistas/saludo.php";
        
        
    
 
?>
