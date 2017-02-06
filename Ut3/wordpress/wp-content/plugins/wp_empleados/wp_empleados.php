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
	include dirname(__FILE__)."/lib/menu_dj.php";

	register_activation_hook (__FILE__, "wpe_install");
	register_deactivation_hook (__FILE__, "wpe_unistall");

//add_shortcode("list_empleados", funcion) remplazar [] y llama a funcion
//add_action('plugins_loaded', 'init');

//define('WPE_PAGE_LIST', 'Listar Empleados');
//define('WPE_PAGE_INSERT', 'Insertar Empleados');

	function wpe_install () {

		DB::createTable();
		DB::createPage ("Listar Empleados", "[list_empleados]");

		// Check if the menu exists
		/*$menu_name = 'My First Menu';
		$menu_exists = wp_get_nav_menu_object( $menu_name );

		// If it doesn't exist, let's create it.
		if( !$menu_exists){
			$menu_id = wp_create_nav_menu($menu_name);

			// Set up default menu items
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' =>  __('Home'),
				'menu-item-classes' => 'home',
				'menu-item-url' => home_url( '/' ), 
				'menu-item-status' => 'publish'));

			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' =>  __('Custom Page'),
				'menu-item-url' => home_url( '/custom/' ), 
				'menu-item-status' => 'publish'));

		}*/

	}

	function wpe_unistall () {

		DB::deleteTable();
		DB::deletePage ("Listar Empleados");

	}


	?>
	<?php


	add_action('admin_menu', array('Menu', 'init'));



/*function my_plugin_menu() {

	add_menu_page("Wp Empleados", "Wp Empleados", 'manage_options', "wp_empleados", "display_menu", "dashicons-welcome-add-page", "30");
	add_submenu_page("wp_empleados", "Insertar Empleado", "Insetar Empleados", "administrator", "wp_empleados_insert", "insert_empleado");
	add_submenu_page("wp_empleados", "Listar Empleados", "Listar Empleados", "administrator", "wp_empleados_list", "list_empleados");
	add_submenu_page("wp_empleados", "Borrar Empleados", "Borrar Empleados", "administrator", "wp_empleados_remove", "remove_empleado");
	add_submenu_page("wp_empleados", "Editar Empleados", "Editar Empleados", "administrator", "wp_empleados_edit", "edit_empleado");

}*/

/* LLamada por add_submenu_page 
function edit_empleado () {

	echo "edit";

}

/* LLamada por add_submenu_page 
function remove_empleado () {

	echo "remove";

}

/* LLamada por add_submenu_page 
function insert_empleado () {

	echo "insert";

}

/* LLamada por add_submenu_page 
function list_empleados () {

	echo "listar";

}

/* LLamada por add_menu_page 
function display_menu(){

	print_r($GLOBALS['menu']);

}*/


?>