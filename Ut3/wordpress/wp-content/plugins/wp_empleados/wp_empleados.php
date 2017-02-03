<?php

/*
	Plugin Name: Plugin Empleados
	Plugin URI: http://localhost/
	Description: Plugin Empleados
	Author: David
	Author URI: http://localhost/
	Text Domain: Plugin Empleados
	Domain Path: /languages/
	Version: 0.0
	License: GPL2
*/


include dirname(__FILE__)."/lib/db_dj.php";

register_activation_hook (__FILE__, "wpe_install");
register_deactivation_hook (__FILE__, "wpe_unistall");

//add_shortcode("list_empleados", funcion) remplazar [] y llama a funcion
//add_action('plugins_loaded', 'init');

//define('WPE_PAGE_LIST', 'Listar Empleados');
//define('WPE_PAGE_INSERT', 'Insertar Empleados');

function wpe_install () {

	DB::createTable();
	DB::createPage ("Listar Empleados", "[list_empleados]");

}

function wpe_unistall () {

	DB::deleteTable();
	DB::deletePage ("Listar Empleados");

}


?>