<?php
    require_once 'utilidades.php';
    //verArray($_POST);
    
    $resultado = "Tu nombre es ".$_POST['nombre']." y tu aficion es ".$_POST['aficiones'];

    include "resultado.php";
    
?>
