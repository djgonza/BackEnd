<?php
include "cabecera.php";

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
echo "Hola Te llamas $nombre y tienes $edad años";

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
