<?php
include "cabecera.php";

?>

<form action="ejemplo04.php" method="post">
	<label>Nombre</label>
	<input type="text" name="nombre" />
	<label>Edad</label>
	<input type="text" name="edad" />
	<label>&nbsp;</label>
	<input type="submit" name="enviar" value="Enviar" /><br />
</form>

<?php 

include "pie.php";
?>
