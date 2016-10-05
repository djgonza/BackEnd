<?php  
    $valorUno = 23;
    $valorDos = 80;
    $suma = $valorUno + $valorDos;
    $resta = $valorUno - $valorDos;
    $producto = $valorUno * $valorDos;
    $resto = $valorUno % $valorDos;
    $cantidadArticulos = 12;
    $cantidadArticulos += 10;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" /> 
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Primeros ejemplos con PHP</title>
    </head>
    <body>
        <div id="contenidoSegundo">
            <div id="cabecera"><h2>Primeros ejemplos PHP</h2></div>
            <div id="principal">
                <h3>Variables y tipos de datos - Constantes</h3>
                <hr />
                <h4>Datos de alumnos</h4>

                <p><?php

                    echo "El valor de \$valorUno es: ".$valorUno."<br />";
                    echo "El valor de \$valorDos es: ".$valorDos."<br />";
                    echo "La suma de ".$valorUno." y ".$valorDos." es ".$suma."<br />";
                    echo "La producto de ".$valorUno." y ".$valorDos." es ".$producto."<br />";
                    echo "El resto de ".$valorUno." y ".$valorDos." es ".$resto."<br />";
                    echo "Hay actualmente ".$cantidadArticulos."<br />";
                    echo "Ahora hay ".$cantidadArticulos++."<br />";
                    echo "Ahora hay ".$cantidadArticulos--."<br />";

                ?></p>  
                
            </div>
            <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>
