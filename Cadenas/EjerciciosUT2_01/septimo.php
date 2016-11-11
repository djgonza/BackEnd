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
                <h3>Mostrando una Imagen</h3>
                <hr />
                <p>
                	Hora actual: <?php echo date("H:i:s"); ?>
                </p>
                <p>
                	Fecha actual: <?php echo date("d F Y") ?>
                </p>
                <a href="sexto.php" title="Dado">Mostrar dado Aleatorio</a>
            </div>
            <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>
