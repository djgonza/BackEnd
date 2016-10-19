<?php 

	function inversion($importe, $anos, $interes){
		
		$cantidad = 0;
		for ($i=0; $i <= $anos ; $i++) { 
			
			$cantidad += $importe * ($interes / 100);

		}

		return $importe + $cantidad;

	}

?>