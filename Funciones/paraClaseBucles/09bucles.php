<?php include "cabecera.php"; ?>

<h2>Generando tabla de multiplicar de un numero</h2>

<h3>Tabla de multiplicar hasta el 8</h3>

	<table>
		<thead>
			<tr>
				<th>x</th>
				<?php 
					for ($i=1; $i <= 10; $i++) { 
						echo "<th>".$i."</th>";
					}
				?>
			</tr>
		</thead>
		<tbody>

			<?php 
				for ($i=1; $i <= 8; $i++) { 
					echo "<tr>";
						//numero de control
						echo "<td>$i</td>";
						//resto de numeros
						for ($y=1; $y <= 10; $y++) { 
							echo "<td>".($i * $y)."</td>";
						}
					echo "<tr />";
				}
			?>
			<tr>
				<td></td>
			</tr>
		</tbody>
	</table>

<?php include "pie.php"; ?>