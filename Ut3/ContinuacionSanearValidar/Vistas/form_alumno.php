<?php
include 'cabecera.php';
include 'helper/Input.php';

if (Input::siEnviado("post"))
{
    $errores = $validador->getErrores();
    if (!empty($errores))
    {
        foreach ($errores as $campo => $mensajeError)
        {
            echo"<p> $mensajeError</p>";
        }
       
    }
}
?>
<form id="form" action="index.php" method="post">
    <fieldset>
        <legend>DATOS DE UN ALUMNO</legend>
        <fieldset>
            <legend>DATOS PERSONALES</legend>
            <label>Nombre</label>
            <input type="text" name="nombre" value="<?php echo Input::get('nombre') ?>"/><br /><br />
            <label>Apellido</label>
            <input type="text" name="apellido" value="<?php echo Input::get('apellido') ?>"/><br /><br />
            <label>Edad</label>
            <input type="text" name="edad" value="<?php echo Input::get('edad') ?>"/><br /><br />
        </fieldset>

        <fieldset>
            <legend>DATOS ACADEMICOS</legend>
            <label>Modulo</label><br />
            <select name="modulo" id="modulo">

                <?php 

                    foreach (array("Bases de datos", "Aplicaciones web", "Seguridad", "Sistema operativos") as $key => $value) {
                        
                        echo "<option value='$value'";
                        echo Input::verificarLista(Input::get("modulo"), $value);
                        echo ">$value</option>";

                    }

                ?>
            </select><br />
            <label>Nota</label><br />
            <select name="nota" id="nota">
                <?php
                for ($i = 1; $i < 11; $i++)
                {
                    echo "<option value ='$i' > $i </option>";
                }
                ?>

            </select><br /><br />
            
            <label>Curso</label><br />
            <input type="radio" name="curso" value="DAM" <?php Input::verificarRadio(Input::get("curso"), "DAM"); ?>>
            <label>DAM</label></br>
            <input type="radio" name="curso" value="DAW" <?php Input::verificarRadio(Input::get("curso"), "DAW"); ?>>
            <label>DAW</label></br>
            <label>Idiomas</label></br>
            <input type="checkbox" name="idiomas[]" value="en" <?php Input::verificarCheck(Input::get("idiomas"), "en"); ?>>
            <label>Ingles</label>
            <input type="checkbox" name="idiomas[]" value="fr" <?php Input::verificarCheck(Input::get("idiomas"), "fr"); ?>>
            <label>Frances</label>
            <input type="checkbox" name="idiomas[]" value="ek" <?php Input::verificarCheck(Input::get("idiomas"), "ek"); ?>>
            <label>Euskera</label>
            <input type="checkbox" name="idiomas[]" value="es" <?php Input::verificarCheck(Input::get("idiomas"), "es"); ?>>
            <label>Castellano</label></br>
            <input type="submit" name ="validar" value="<?php echo $fase ?>" />
        </fieldset>
    </fieldset>
</form>

<?php
if (isset($resultado))
{

    echo $resultado;
}
include 'pie.php';
?>