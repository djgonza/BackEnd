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

	/* Constantes */
	global $wpdb;
	define ('PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));
	define ('PLUGIN_LIB_PATH', PLUGIN_DIR_PATH."lib/");
	define ('PLUGIN_HELPER_PATH', PLUGIN_DIR_PATH."helper/");
	define ('PLUGIN_VIEWS_PATH', PLUGIN_DIR_PATH."views/");
	define ('PLUGIN_JS_PATH', PLUGIN_DIR_PATH."js/");
	define ('PLUGIN_CSS_PATH', PLUGIN_DIR_PATH."css/");
	define ('PLUGIN_TABLE_NAME', $wpdb->prefix."empleados_dj");

	/* Dependencias */
	include_once(ABSPATH.'wp-admin/includes/plugin.php'); // Para is_plugin_active
	//Lib
	include dirname(__FILE__)."/lib/WPE_DB_dj.php";
	include dirname(__FILE__)."/lib/Controller_dj.php";
	//Helper
	include dirname(__FILE__)."/helper/WPE_Input_dj.php";
	include dirname(__FILE__)."/helper/WPE_Validator_dj.php";

	/* 
		Si el plugin esta activo inicializamos el controlador
	*/
	if(is_plugin_active('wp_empleados/wp_empleados.php')) {
		$wpe_controller = new WPE_Controller();
	}

	/* Activacion y Desactivacion del plugin */
	register_activation_hook (__FILE__, "wpe_install");
	register_deactivation_hook (__FILE__, "wpe_unistall");


//add_shortcode("list_empleados", funcion) remplazar [] y llama a funcion
//add_action('plugins_loaded', 'init');

//define('WPE_PAGE_LIST', 'Listar Empleados');
//define('WPE_PAGE_INSERT', 'Insertar Empleados');

	/*
		
		Crea la tabla en la DB
		Crea la pagina en el frontEnd

	*/
	function wpe_install () {

		WPE_DB::createTable();
		WPE_DB::createPage ("Listar Empleados", "[list_empleados]");

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

		/*
		
			Elimina las dependencias creadas por el plugin

		*/
		function wpe_unistall () {

			WPE_DB::deleteTable();
			WPE_DB::deletePage ("Listar Empleados");

		}


?>