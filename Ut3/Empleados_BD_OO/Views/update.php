<?php include "head.php"; ?>

<h2>Actualizar Empleado</h2>

<form action="index.php" method="post">
	
	<label>Nombre</label>
	<input type="text" name="nombre" value="<?php echo $empleado->getNombre(); ?>">

	<label>Apellido</label>
	<input type="text" name="apellido" value="<?php echo $empleado->getApellido(); ?>">

	<label>Nº Seguridad Social</label>
	<input type="text" name="nss" value="<?php echo $empleado->getNss(); ?>" disabled>

	<label>Cantidad Fija</label>
	<input type="text" name="fijo" value="<?php echo $empleado->getFijo(); ?>">

	<label>Ventas Brutas</label>
	<input type="text" name="ventasbrutas" value="<?php echo $empleado->getVentasBrutas(); ?>">

	<label>Tarifa Comision</label>
	<select name="tarifacomision">
		<?php
		$values = array("1", "2", "3");
		foreach ($values as $value){
			echo "<option value='".$value."'";
			echo Utilidades::verificarLista($empleado->getTarifaComision(), $value);
			echo ">$value</option>";
		}
		?>
	</select>

	<input type="hidden" name="nss" value="<?php echo $empleado->getNss(); ?>">

	<input type="submit" name="update" value="Actualizar">

</form>

<?php include "footer.php"; ?>