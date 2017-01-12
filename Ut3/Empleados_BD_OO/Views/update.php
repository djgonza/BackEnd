<?php include "head.php"; ?>

<h2>Actualizar Empleado</h2>

<form action="index.php" method="post">
	
	<label>Nombre</label>
	<input type="text" name="nombre" value="<?php echo $empleado->getNombre(); ?>">

	<label>Apellido</label>
	<input type="text" name="apellido" value="<?php echo $empleado->getApellido(); ?>">

	<label>Nº Seguridad Social</label>
	<input type="text" name="nss" value="<?php echo $empleado->getNss(); ?>">

	<label>Cantidad Fija</label>
	<input type="text" name="fijo" value="<?php echo $empleado->getFijo(); ?>">

	<label>Ventas Brutas</label>
	<input type="text" name="ventasbrutas" value="<?php echo $empleado->getVentasBrutas(); ?>">

	<label>Tarifa Comision</label>
	<select name="tarifacomision">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
	</select>

	<input type="submit" name="update" value="Actualizar">

</form>

<?php include "footer.php"; ?>