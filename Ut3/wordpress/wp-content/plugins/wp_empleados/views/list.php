<h2>Empleados</h2>

<table>
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Nº Seguridad Social</th>
			<th>Fijo</th>
			<th>Ventas Brutas</th>
			<th>Tarifa Comision</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>

		<?php 

		if(isset($empleados)){

			if(count($empleados) == 0){

				echo "<tr><td colspan='7'>Ningun registro encontrado!!!</td></tr>";

			}else{

				foreach ($empleados as $key => $empleado) {
					echo "<tr>";
					foreach ($empleado as $key => $value) {
						echo "<td>$value</td>";
					}
					?>
					<td>
						<form action="" method="POST">
							<input type="hidden" name="nss" value="<?php echo $empleado->nss; ?>">
							<input type="submit" name="remove" class="danger" value="Borrar">
						</form>
					</td>
					<td>
						<form action="?page=wp_empleados_edit" method="post">
							<input type="hidden" name="nss" value="<?php echo $empleado->nss; ?>">
							<input type="submit" name="edit" class="primary" value="Editar">
						</form>
					</td>
					<?php
					echo "</tr>";
				}
			} 
		}

		?>
	</tbody>

</table>

