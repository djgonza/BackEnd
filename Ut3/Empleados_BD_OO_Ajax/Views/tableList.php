<table>

	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Nº Seguridad Social</th>
			<th>Fijo</th>
			<th>Ventas Brutas</th>
			<th>Tarifa Comision</th>
			<th><i class="material-icons">delete</i></th>
			<th><i class="material-icons">mode_edit</i></th>
		</tr>
	</thead>

	<tbody>
		
		<?php 

		for ($i=0; $i < count($result); $i++) { 

			?>

			<tr>
				<td><?php echo $result[$i]["nombre"]; ?></td>
				<td><?php echo $result[$i]["apellido"]; ?></td>
				<td><?php echo $result[$i]["nss"]; ?></td>
				<td><?php echo $result[$i]["fijo"]; ?></td>
				<td><?php echo $result[$i]["ventasbrutas"]; ?></td>
				<td><?php echo $result[$i]["tarifacomision"]; ?></td>
				<td>
					<form action="index.php" method="POST">
						<input type="hidden" name="nss" value="<?php echo $result[$i]["nss"]; ?>">
						<input type="submit" name="delete" value="Borrar">
					</form>
				</td>
				<td>
					<form action="index.php" method="POST">
						<input type="hidden" name="nss" value="<?php echo $result[$i]["nss"]; ?>">
						<input type="submit" name="update" value="Editar">
					</form>
				</td>
			</tr>

			<?php

		}

		?>
		
	</tbody>

</table>