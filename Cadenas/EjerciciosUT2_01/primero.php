<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /> 
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Primeros ejemplos con PHP</title>
    </head>
    <body>
        <div id="contenido">
        <div id="cabecera"><h2>Primeros ejemplos PHP</h2></div>
        <div id="principal">
            <p><?php echo "Hola!, este es mi primer ejemplo en PHP \n" ?></p>
            <hr />
            <p><?php echo "PHP es un lenguaje de script de servidor\n" ?></p>
            <p><?php echo "Con la sentencia <spam class='sentencia'>echo</spam> mostramos información en el navegador\n" ?></p>
            <p><?php echo "Si utilizo \\n puedo insertar saltos de linea en el código fuente del navegador\n" ?></p>
            <p><?php echo "Pero solo funciona con las comillas dobles, con las simples\n" ?></p>
            <p><?php echo "22 es un número\n"; ?></p>
            <h3>Ahora practicaremos con print</h3>
            <p><?php print "Hola!, este es mi primer ejemplo utilizando <spam class='sentencia'>print</span>\n"  ?></p>
            <p><?php print "Las comillas simples también funcioanan con <spam class='sentencia'>print</span>\n"?></p>
        </div>
         <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>
