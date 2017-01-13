<?php include "head.php"; ?>

<h2>Buscar</h2>

<form action="index.php?section=search" method="POST">
	
	<label>Nº Seguridad Social</label>
	<input type="text" name="nss" value="<?php echo Input::get('nss'); ?>">

	<input type="submit" name="search" value="Buscar">

</form>

<?php 

	if (isset($result)){
		include "tableList.php";
	}

?>

<?php include "footer.php"; ?>