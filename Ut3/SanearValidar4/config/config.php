<?php

function autoLoad($class){

	$paths = array("Controlador", "helper", "modelo");

	foreach ($paths as $path){
		if(file_exists("$path/$class.php")){
			require "$path/$class.php";
		}
	}
	
}

spl_autoload_register('autoLoad');

define("DB_SERVER", "mysql.hostinger.es");
define("DB_USER", "u950900945_alumn");
define("DB_PASS", "alumno");
define("DB_NAME", "u950900945_alumn");

/*define("DB_SERVER", "localhost");
define("DB_USER", "alumno");
define("DB_PASS", "alumno");
define("DB_NAME", "actividades");*/

?>