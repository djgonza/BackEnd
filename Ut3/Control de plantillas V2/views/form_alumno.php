<?php include "cabecera.html"; ?>

<form action="index.php" method="POST">
	<fieldset>
	<legend>Datos Alumno</legend>
	<label>Alumno</label>
	<input type="text" name="name" value="Pepe">
	<label>Apellido</label>
	<input type="text" name="sName" value="Palotes">
	<label>Módulo</label>
	<select name="module">
		<option value="Base de datos">Base de datos</option>
		<option value="Aplicaciones Web">Aplicaciones Web</option>
		<option value="Seguridad">Seguridad</option>
		<option value="Sistemas Operativos">Sistemas Operativos</option>
	</select>
	<select name="nota">
		<?php 
			for ($i=1; $i <= 10; $i++) { 
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
		?>
	</select>
	<input type="submit" value="Enviar" name="btnEnviar">
	</fieldset>
</form>

<?php include "pie.html"; ?>