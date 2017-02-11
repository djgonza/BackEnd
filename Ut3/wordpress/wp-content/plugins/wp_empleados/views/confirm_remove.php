<div>
	<div class="alert danger">¿Desea eliminar el registro <?php echo $_POST['nss']; ?>?</div>
	<form action='' class="inline" method='POST'>
		<input type='hidden' name='nss' value="<?php echo $_POST['nss']; ?>">
		<input type='hidden' name='remove' value="Borrar">
		<input type="submit" name="confirm" class="succes" value="Aceptar">
	</form>
	<form action='' class="inline" method='POST'>
		<input type="submit" name="confirm" class="danger" value="Denegar">
	</form>
</div>