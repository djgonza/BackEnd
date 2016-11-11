<?php include "cabecera.php"; ?>

<form action="index.php" method="POST">
	Nombre:<br>
	<input type="text" name="user" value="uno"><br>
	Contraseña:<br>
	<input type="text" name="pass" value="dos">
	<br><br>
	<input type="submit" name="btn" value="Acceder">
	<input type="submit" name="btn" value="Crear">
</form>

<?php include "pie.php"; ?>
