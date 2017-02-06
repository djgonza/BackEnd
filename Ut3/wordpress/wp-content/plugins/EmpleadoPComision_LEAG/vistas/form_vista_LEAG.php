<form id='form' action="?" method="post">
    <h3>Introduzca los datos del empleado por comisión</h3><br />
    <label>Nombre</label><br />
    <input type="text" name="nombre" value="<?php echo Input::get('nombre') ?>"/>
    <label>Correo electronico</label><br />
    <input type="text" name="email" value="<?php echo Input::get('email') ?>"/>
</form>