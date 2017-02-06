<?php

/*
	Plugin Name: PluginEmpleados
	Plugin URI: http://localhost/
	Description: Plugin Empleados
	Author: ALAzne
	Author URI: http://localhost/
	Text Domain: Plugin Empleados
	Domain Path: /languages/
	Version: 0.0
	License: GPL2
*/


	include dirname(__FILE__)."/lib/funcionesLEAG.php";

	register_activation_hook (__FILE__, 'ConexionBD::crear_tabla');
	register_deactivation_hook (__FILE__, 'ConexionBD::borrar_tabla');

//add_shortcode("etiqueta", funcion) remplazar [] y llama a funcion
//add_action('plugins_loaded', 'init');

/*function install () {

	ConexionBD::crear_tabla();

}

function unistall () {

	ConexionBD::borrar_tabla();

}*/


?>