<?php
echo "Foreach con objetos (ejemplo file104.php)<br /><br /><br />";

class Prueba{
	private $prop1 = "valor de propiedad 1";
	private $prop2 = "valor de propiedad 2";
	private $prop3 = "valor de propiedad 3";
}

$obj = new Prueba;

foreach ($obj as $nombre_prop => $valor_prop){
 	echo "<B>Propiedad:</B>  " . $nombre_prop . 
      "<B>    Valor:  </B>" . $valor_prop . "<BR>";
}	

?>