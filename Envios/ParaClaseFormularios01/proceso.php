
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <title>Formulario datos personales</title>
</head>
<body>
    <div id="contenido">
        <?php
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";

        echo "<p>Ha introducido los siguientes datos</p>";
        echo "<p>Nombre: ".$_POST["usuario"]."</p>";
        echo "<p>Password: ".$_POST["clave"]."</p>";

        if(isset($_POST["sexo"])){
            echo "<p>Sexo: ".$_POST["sexo"]."</p>";
        }
        

        /* */
        if(isset($_POST["edad"])){
            if($_POST["edad"] == "0a19") {

                echo "<p>Edad: Entre 0 y 19</p>";

            }else if($_POST["edad"] == "20a34"){

                echo "<p>Edad: Entre 20 y 34</p>";

            }else if($_POST["edad"] == "35a65"){

                echo "<p>Edad: Entre 35 y 65</p>";

            }else if($_POST["edad"] == "mas65"){

                echo "<p>Edad: Mas de 65</p>";

            }
        }

        /* */
        if (isset($_POST["vivienda"])) {
            echo "<p>Usted tiene vivienda</p>";
        }
        if (isset($_POST["trabaja"])) {
            echo "<p>Usted trabaja</p>";
        }
        if (isset($_POST["mus"])) {
            echo "<p>Usted sabe jugar al mus</p>";
        }

        echo "<p>Comentario: ".$_POST["comentarios"]."</p>";
        echo "<p>Pais: ".$_POST["pais"]."</p>";
        
        echo "<p>Sus colores preferidos son: ";
        foreach ($_POST["colores"] as $key => $value) {
            echo $value." ";
        }
        echo "</p>";

        ?>
    </div>
</body>
</html>
