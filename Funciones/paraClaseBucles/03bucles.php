<?php include "cabecera.php"; ?>

<h2>Tabla de una fila</h2>
<table>
	<tbody>
		<tr>
			<?php 
				for ($i=1; $i <= 10; $i++) { 
					echo "<td>$i</td>";
				}
			?>
		</tr>
	</tbody>
</table>

<h2>Tabla de una Columna</h2>
<table>
	<tbody>
		<?php  
			$i = 1;
			while ($i <= 10) {
				echo "<tr><td>$i</td></tr>";
				$i++;
			}
		?>
		
	</tbody>
</table>

<?php include "pie.php"; ?>