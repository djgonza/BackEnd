<?php

    include 'cabecera.php';
    include 'helper/Input.php';
    include 'helper/Utilidades.php';

    if (Input::siEnviado("post")){
        $errores = $validador->getErrores();
        if (!empty($errores)){
            foreach ($errores as $campo => $mensajeError){
                echo"<p>$mensajeError</p>";
            }
        }
    }

?>

<form id="form" action="index.php" method="post">

    <legend>Datos Alumno</legend>

    <fieldset>

        <legend>Datos Personales</legend>

        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo Input::get('nombre') ?>"/>

        <label>Apellido</label>
        <input type="text" name="apellido" value="<?php echo Input::get('apellido') ?>"/>

        <label>DNI</label>
        <input type="text" name="dni" value="<?php echo Input::get('dni') ?>"/>

        <label>Edad</label>
        <input type="text" name="edad" value="<?php echo Input::get('edad') ?>"/>

    </fieldset>
    <fieldset>
        <legend>Datos Academicos</legend>

        <label>Módulo</label>
        <select name="modulo" id="modulo">
            <?php
                $modulos = array("Bases de datos", "Aplicaciones web", "Seguridad", "Sistema operativos");
                foreach ($modulos as $modulo){
                    echo "<option value ='" . $modulo . "'";
                    echo Utilidades::verificarLista(Input::get('modulo'), $modulo);
                    echo ">$modulo</option>\n";
                }
            ?>
        </select>

        <label>Nota</label>
        <select name="nota" id="nota">
            <?php
                for ($i = 1; $i < 11; $i++){
                    echo "<option value ='".$i."'";
                    echo Utilidades::verificarLista(Input::get('nota'), $i);
                    echo ">$i</option>\n";
                }
            ?>
        </select>

        <label>Curso</label>
        <input type="radio" name="curso" value="DAW" <?php echo Utilidades::verificarBotones(Input::get('curso'), "DAW") ?>/>DAW<br />
        <input type="radio" name="curso" value="DAM" <?php echo Utilidades::verificarBotones(Input::get('curso'), "DAM") ?>/>DAM<br /><br />

        <label>Idiomas</label>
        <input type="checkbox" name="idiomas[]" value="Ingles" <?php echo Utilidades::verificarCasillas(Input::get('idiomas[]'), "Ingles") ?>/>Inglés
        <input type="checkbox" name="idiomas[]" value="Frances" <?php echo Utilidades::verificarCasillas(Input::get('idiomas[]'), "Frances") ?>/>Francés
        <input type="checkbox" name="idiomas[]" value="Euskera" <?php echo Utilidades::verificarCasillas(Input::get('idiomas[]'), "Euskera") ?>/>Euskera
        <input type="checkbox" name="idiomas[]" value="Castellano" <?php echo Utilidades::verificarCasillas(Input::get('idiomas[]'), "Castellano") ?>/>Castellano

    </fieldset>
    <input type="submit" name ="validar" value="<?php echo $fase ?>" />
</form>

<?php

if (isset($resultado)) { echo $resultado; }

include 'pie.php';

?>