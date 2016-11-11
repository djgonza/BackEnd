<?php

    
    require_once 'utilidades.php';
    
     
     $resultado = "Tu nombre es ".$_POST["nombre"]." y tus aficiones son: ";
     if (isset($_POST["cine"])){
     	$resultado .= $_POST["cine"];
     }

     include "resultado.php";
    
?>
