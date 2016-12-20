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
            <label>Edad</label><br /><br />
            <input type="text" name="edad" value="<?php echo Input::get('edad') ?>"/><br /><br />
        </fieldset>

        <fieldset>
            <legend>DATOS ACADEMICOS</legend>
            <label>Modulo</label><br />
            <select name="modulo" id="modulo">
                <option value="Bases de datos" selected="selected">Bases de datos</option>
                <option value="Aplicaciones web">Aplicaciones web</option>
                <option value="Seguridad">Seguridad</option>
                <option value="Sistema operativos">Sistema operativos</option>
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