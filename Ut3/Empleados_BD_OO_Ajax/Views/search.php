<?php include "head.php"; ?>

<h2>Buscar</h2>

<form action="index.php?section=search" method="POST">
	
	<label>Nº Seguridad Social</label>
	<input type="text" id="search" name="nss" value="<?php echo Input::get('nss'); ?>">

	<input type="submit" class="inputAction" name="search" value="Buscar">

</form>

<?php 

	if (isset($result)){
		include "tableList.php";
	}

?>

<?php include "footer.php"; ?>