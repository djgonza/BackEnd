<?php  
    define ("NOMBREINSTI", 'CI Mª Ana Sanz');
    define ("HORAS", 7);
    $nombre = "Maria";
    $edad = 23;
    $altura = 1.78;
    $modulo = "Desarrollo en entorno servidor";
    $pendiente = true;
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

                <table>
                    <caption>Datos del alumno</caption>
                    <tbody>
                        <tr>
                            <td>Nombre:</td>
                            <td><?php echo $nombre ?></td>
                        </tr>
                        <tr>
                            <td>Edad:</td>
                            <td><?php echo $edad ?></td>
                        </tr>
                        <tr>
                            <td>Altura:</td>
                            <td><?php echo $altura ?></td>
                        </tr>
                        <tr>
                            <td>Módulo:</td>
                            <td><?php echo $modulo ?></td>
                        </tr>
                        <tr>
                            <td>Horas:</td>
                            <td><?php echo HORAS ?></td>
                        </tr>
                        <tr>
                            <td>¿Tiene algo pendiente?</td>
                            <td><?php echo $pendiente ?></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>
