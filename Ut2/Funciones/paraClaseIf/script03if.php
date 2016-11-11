<?php include "cabecera.php"; ?>

<?php 
	
	$random = rand(1,100);
	$intento = rand(1,100);

?>
<p><?php echo "Su intento es: ".$random; ?></p>
<p>
<?php 

	if ($random < $intento) {
		echo "El intento es mas bajo que el nº Secreto";
	} else if ($random > $intento) {
		echo "El intento es mas alto que el nº Secreto";
	} else {
		echo "Has acertado el nº Secreto";
	}

?>
</p>
<?php include "pie.php"; ?>