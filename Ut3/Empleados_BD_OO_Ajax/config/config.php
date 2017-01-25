<?php

function autoLoad($class){

	$paths = array("Controllers", "helper", "Models");

	foreach ($paths as $path){
		if(file_exists("$path/$class.php")){
			require "$path/$class.php";
		}
	}
	
}

spl_autoload_register('autoLoad');


// DB Info 
define("DB_SERVER", "localhost");
define("DB_USER", "alumno");
define("DB_PASS", "alumno");
define("DB_NAME", "bdempleadosporcomision");

?>