<?php include "cabecera.php"; ?>

<h2>Generando tabla de multiplicar de un numero</h2>

	<?php 

		$numero = 4;

	?>

	<h3>Tabla de multiplicar del <?php echo $numero; ?></h3>
	<table>
		<tbody>
			<?php 
				for ($i=0; $i <= 9; $i++) { 
			?>
			
					<tr>
						<td>4 * <?php echo $i; ?></td>
						<td><?php echo $i * $numero; ?></td>
					</tr>
			
			<?php } ?>

			</tbody>
		</table>
	

<?php include "pie.php"; ?>