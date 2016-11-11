<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" /> 
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Primeros ejemplos con PHP</title>
</head>
<body>
    <div id="contenidoSegundo">
        <div id="cabecera"><h2>Formularios GET</h2></div>
        <div id="principal">

            <?php 

            	echo "<p>ID = ".$_GET["Id"]."</p>";
            	echo "<p>Modulo = ".$_GET["Modulo"]."</p>";
            	echo "<p>Horas = ".$_GET["Horas"]."</p>";

            ?>

        </div>
        <div id="pie">Desarrollo web en entorno servidor</div>
    </div>
</body>
</html>
