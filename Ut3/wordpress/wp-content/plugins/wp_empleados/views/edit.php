<?php

var_dump($empleado);

?>

<h2>Actualizar Empleado</h2>

<form action="?page=wp_empleados_edit" method="post">
	
	<label>Nombre</label>
	<input type="text" name="nombre" value="<?php echo $empleado->nombre; ?>">

	<label>Apellido</label>
	<input type="text" name="apellido" value="<?php echo $empleado->apellido; ?>">

	<label>Nº Seguridad Social</label>
	<input type="text" name="nss" value="<?php echo $empleado->nss; ?>" disabled>

	<label>Cantidad Fija</label>
	<input type="text" name="fijo" value="<?php echo $empleado->fijo; ?>">

	<label>Ventas Brutas</label>
	<input type="text" name="ventasbrutas" value="<?php echo $empleado->ventasbrutas; ?>">

	<label>Tarifa Comision</label>
	<input type="text" name="tarifacomision" value="<?php echo $empleado->tarifacomision; ?>">

	<input type="hidden" name="nss" value="<?php echo $empleado->nss; ?>">

	<input type="submit" name="update" value="Actualizar">

</form>