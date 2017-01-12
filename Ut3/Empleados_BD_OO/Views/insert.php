<?php include "head.php"; ?>

<h2>Insertar Empleado</h2>

<?php 

//Mostramos los errores
if (isset($validator)){
	$errors = $validator->getErrors();
	foreach ($errors as $key => $value) {
		echo "<p>$errors[$key]<p>";
	}
}

?>

<form action="index.php" method="post">
	
	<label>Nombre</label>
	<input type="text" name="nombre" value="<? echo Input::get('nombre'); ?>">

	<label>Apellido</label>
	<input type="text" name="apellido" value="<? echo Input::get('apellido'); ?>">

	<label>Nº Seguridad Social</label>
	<input type="text" name="nss" value="<? echo Input::get('nss'); ?>">

	<label>Cantidad Fija</label>
	<input type="text" name="fijo" value="<? echo Input::get('fijo'); ?>">

	<label>Ventas Brutas</label>
	<input type="text" name="ventasbrutas" value="<? echo Input::get('ventasbrutas'); ?>">

	<label>Tarifa Comision</label>
	<select name="tarifacomision">
		<?php
		$values = array("1", "2", "3");
		foreach ($values as $value){
			echo "<option value='".$value."'";
			echo Utilidades::verificarLista(Input::get("tarifacomision"), $value);
			echo ">$value</option>";
		}
		?>
	</select>

	<input type="submit" name="insert" value="Insertar">

</form>

<?php include "footer.php"; ?>