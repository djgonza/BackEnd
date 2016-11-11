<?php  
    $randomUno = rand (1, 6);
    $randomDos = rand (1, 6);
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
                <h3>Imagenes Aleatorias</h3>
                <hr />
                <img src=<?php echo "images/".$randomUno.".gif"; ?> alt="Dado">
                <img src=<?php echo "images/".$randomDos.".gif"; ?> alt="Dado">
                <p><a href="octavo.php" title="Dado">Recargar</a></p>   
            </div>
            <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>
