<?php include "cabecera.php"; ?>

<h2>Simulando notas de una clase y contando aprobados</h2>

	<?php 

		define ("ALUMNOS", 25);
		$aprobados = 0;
		$suspensos = 0;
		for ($i=0; $i <= ALUMNOS; $i++) { 
			
			if(rand(0,10) > 4) {
				$aprobados++;
			}else{
				$suspensos++;
			}
		}

		echo "<p>Total aprobados $aprobados</p>";
		echo "<p>Total suspensos $suspensos</p>";

	?>

<?php include "pie.php"; ?>