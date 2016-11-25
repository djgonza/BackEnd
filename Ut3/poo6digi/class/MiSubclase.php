<?php 

	require_once "MiClase.php";

	class MiSubClase extends MiClase{

	    private $despedida;

	    function __construct() {

	        echo "_Construct: ¡Se está ejecutando el constructor de un objeto de la Subclase  MiSubClase <br />";
	    }

	    function __destruct() {

	        echo "_Destruct: ¡Se esta destryundo un objeto de la clase MiSubClase!<br>";
	    }

	    function despedirse() {
	        echo $this->despedida;
	    }



	}

?>