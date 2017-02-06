<?php include "head.php"; ?>

<h2>Balance</h2>

<?php 

	echo "<table>";
	echo "<tr>";
	echo "<th>Nombre</th>";
	echo "<th>Ingresos</th>";
	echo "</tr>";

	foreach ($empleados as $key => $value) {

		echo "<tr>";
		echo "<td>".$value->getNombre()."</td>";
		echo "<td>".number_format ($value->ingresos(),2 , ",", ".")."€</td>";
		echo "</tr>";

	}

	echo "</table>";

?>

<?php include "footer.php"; ?>