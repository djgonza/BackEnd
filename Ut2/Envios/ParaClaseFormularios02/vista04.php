<?php
     
    include "cabecera.php";
?>
    <form id='form' action="" method="post">
        <div>
        <label>Nombre</label>
        <input type="text" name="nombre" required /><br />
        <p>Qu� aficiones tienes?</p><br />
        <select name="aficiones[]" multiple="multiple">
            <option value="cine" ">Cine</option>
            <option value="lectura">Lectura</option>
            <option value="deporte">Deporte</option>
            <option value="baile">Baile</option>
        </select><br />
        <label>&nbsp;</label>
        <input type="submit" name="enviar" value="Enviar" /><br />
        </div>
    </form>
<?php
    include "pie.php";
?>
