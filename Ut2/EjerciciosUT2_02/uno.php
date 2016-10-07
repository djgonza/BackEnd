
<?php include 'includes/cabecera.php'; ?>

<h3>Variables y tipos de datos</h3><hr />
<div id="principal">
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
            <?php include 'includes/pie.php'; ?>



