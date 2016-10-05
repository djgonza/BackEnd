<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-UTF8" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Primeros ejemplos con PHP</title>
    </head>
    <body>
         <div id="contenido">
        <div id="cabecera"><h2>Primeros ejemplos PHP</h2></div>
        <div id="principal">
            <h3>Variables y tipos de datos</h3><hr />
            <?php
                /*
                 * Ejercicio para que resuelvan los alumnos
                 */
                 $nombre = "Pepe";
                 $edad = 23;
                 $altura = 1.78;
                 $modulo = 'Desarrollo web en entorno servidor';
                 $horas = 5;
                 $pendientePrimero = true;
            ?>
            <h4>Datos de un alumno</h4>
            <?php 
                echo "<table><caption>Datos de un alumno</caption>";
                echo "<tr><td>Nombre</td><td> ".$nombre."</td></tr>";
                echo "<tr><td>Edad</td><td> ".$edad."</td></tr>";
                echo "<tr><td>Altura</td><td> ".$altura."</td></tr>";
                echo "<tr><td>M&oacute;dulo</td><td> $modulo</td></tr>";
                echo "<tr><td>Algo pendiente de primero?</td><td> ".$pendientePrimero."</td></tr>";
                echo "</table>";
   
?>
       
      </div>
         <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>
