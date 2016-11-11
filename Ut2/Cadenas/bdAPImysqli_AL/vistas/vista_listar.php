<?php

	include "cabecera.php";
	
	echo "<table>";

	?>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Edad</th>
			<th>Est. civil</th>
			<th>Género</th>
		</tr>
	<?php
	
	foreach ($personas as $persona){
		?>
			<tr>
				<td><?php echo htmlspecialchars($persona['nombre']); ?></td>
				<td><?php echo htmlspecialchars($persona['apellido']); ?></td>
				<td><?php echo $persona['edad']; ?></td>
				<td><?php echo $persona['eCivil']; ?></td>
				<td><?php echo $persona['genero'] ?></td>
			</tr>
		<?php
	}

	echo "</table>";
	include "pie.php";

?>