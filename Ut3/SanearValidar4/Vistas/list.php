<?php 

	include 'cabecera.php';

?>
	<a href="index.php">Insertar</a>
	<table>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>DNI</th>
			<th>Edad</th>
			<th>Módulo</th>
			<th>Nota</th>
			<th>Curso</th>
			<th>Idiomas</th>
		</tr>
		<?php 


			for ($i=0; $i < count($result); $i++) { 

				echo "<tr>";
				echo "<td>".$result[$i][0]."</td>";
				echo "<td>".$result[$i][1]."</td>";
				echo "<td>".$result[$i][2]."</td>";
				echo "<td>".$result[$i][3]."</td>";
				echo "<td>".$result[$i][4]."</td>";
				echo "<td>".$result[$i][5]."</td>";
				echo "<td>".$result[$i][6]."</td>";
				echo "<td>".$result[$i][7]."</td>";
				echo "</tr>";

			}

		?>
	</table>


<?php 

	include 'pie.php';

?>