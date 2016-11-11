<?php  
    define ("NOMBREINSTI", 'CI Mª Ana Sanz');
    define ("HORAS", 7);
    $nombre = "Maria";
    $edad = 23;
    $altura = 1.78;
    $modulo = "Desarrollo en entorno servidor";
    $pendiente = true;
?>

<!DOCTYPE html>
<html>
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
                <p><?php echo "Instituto: ".NOMBREINSTI ?></p>
                <p><?php echo "Nombre: ".$nombre ?></p>
                <p><?php echo "Edad: ".$edad ?></p>
                <p><?php echo "Altura ".$altura; ?></p>
                <p><?php echo "Módulo: ".$modulo; ?></p>
                <p><?php echo "Horas: ".HORAS; ?></p>
                <p><?php echo "¿Tiene algo pendiente? ".$pendiente; ?></p>
                
            </div>
            <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>

