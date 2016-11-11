<?php 

define ("INTERES", 5);

include "includes/areaCirculo.php";
include "includes/inversion.php";

function saludar()
{
	echo "Hola, esto es un saludo sin parametros";
}

function saludarPersonalizado($persona)
{
	echo "Hola ".$persona.", ¿Como estas?";
}

?>
<?php

include "includes/cabecera.php";

?>
	<h3>Primer saludo</h3>
	<p><?php saludar(); ?></p>
	<h3>Segundo saludo</h3>
	<p><?php saludar(); ?></p>
	<h3>Tercer saludo personalizado</h3>
	<p><?php saludarPersonalizado("Juan"); ?></p>
	<hr>
	<?php 
		$i = 1;
		while ($i <= 7) {
			echo "<p>Saludo".$i." ";
			saludar();
			echo "</p>";
			$i++;
		}
	?>
	<h3>Área del circulo</h3>
	<?php 
		$radio = 5;
	?>
	<p class="borderDash">
		El área de un circulo de radio 
		<?php echo $radio; ?> 
		es 
		<?php echo number_format (areaCirculo($radio), 2); ?>
	</p>
	<h3>Inversion</h3>
	<?php 
		$inversion = 1500;
		$anos = 6;
	?>
	<div class="borderDash">
		<p>Cantidad inicial <?php echo $inversion; ?></p>
		<p>Interés <?php echo INTERES; ?></p>
		<p>Años <?php echo $anos; ?></p>
		<p>
			Nueva Cantidad  
			<?php echo number_format(inversion($inversion, $anos, INTERES), 2); ?>	
		</p>
	</div>
<?php

include "includes/pie.php";  

?>
