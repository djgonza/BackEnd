<h2>Insertar Empleado</h2>

<?php 

	//Mostramos los errores
	if (isset($validator)){
		$errors = $validator->getErrors();
		foreach ($errors as $key => $value) {
			echo "<div class='alert danger'>$errors[$key]</div>";
		}
	}

?>

<form action="?page=wp_empleados_insert" method="post">
	
	<form action="index.php" method="post">

		<label>Nombre</label>
		<input type="text" name="nombre" value="<?php echo WPE_Input::get('nombre'); ?>">

		<label>Apellido</label>
		<input type="text" name="apellido" value="<?php echo WPE_Input::get('apellido'); ?>">

		<label>Nº Seguridad Social</label>
		<input type="text" name="nss" value="<?php echo WPE_Input::get('nss'); ?>">

		<label>Cantidad Fija</label>
		<input type="text" name="fijo" value="<?php echo WPE_Input::get('fijo'); ?>">

		<label>Ventas Brutas</label>
		<input type="text" name="ventasbrutas" value="<?php echo WPE_Input::get('ventasbrutas'); ?>">

		<label>Tarifa Comision</label>
		<input type="text" name="tarifacomision" value="<?php echo WPE_Input::get('tarifacomision'); ?>">

		<input type="submit" class="primary" name="insert" value="Insertar">

	</form>

</form>