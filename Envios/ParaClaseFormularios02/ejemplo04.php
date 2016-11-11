<?php
 
    require_once 'utilidades.php';
    //verArray($_POST);
    
    $resultado = "<p>Nombre: ".$_POST['nombre']."</p>";
    $resultado .= "<p>Aficiones:</p><ul>";

    foreach ($_POST['aficiones'] as $key => $value) {
    	$resultado .= "<li>".$value."</li>";
    }

    $resultado .= "</ul>";

    include "resultado.php";
    
?>
