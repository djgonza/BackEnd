<?php include "cabecera.php"; ?>

<h2>Lista de viñetas con for</h2>
<ul>
	<?php  
		for ($i=1; $i <= 10; $i++) { 
			
			echo "<li>Iteraccion $i</li>";

		}
	?>
</ul>
<h2>Lista de viñetas con while</h2>
<ul>
	<?php
		$i = 1;
		while ($i <= 10) {
			echo "<li>Iteraccion $i</li>";
			$i++;
		}
	?>
</ul>

<?php include "pie.php"; ?>