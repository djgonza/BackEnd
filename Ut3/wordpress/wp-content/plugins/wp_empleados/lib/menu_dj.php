<?php 

class Menu {

	static function init () {

		/* Crear menus en el backend */
		add_menu_page("Wp Empleados", "Wp Empleados", 'manage_options', "wp_empleados", "Menu::displayMenu", "dashicons-welcome-add-page", "30");
		add_submenu_page("wp_empleados", "Insertar Empleado", "Insetar Empleados", "administrator", "wp_empleados_insert", "Menu::insert_empleado");
		add_submenu_page("wp_empleados", "Listar Empleados", "Listar Empleados", "administrator", "wp_empleados_list", "Menu::list_empleados");
		add_submenu_page("wp_empleados", "Borrar Empleados", "Borrar Empleados", "administrator", "wp_empleados_remove", "Menu::remove_empleado");
		add_submenu_page("wp_empleados", "Editar Empleados", "Editar Empleados", "administrator", "wp_empleados_edit", "Menu::edit_empleado");

	}

	static function displayMenu () {

		echo "Menu";

	}

	static function insert_empleado () {

		echo "Insert";

	}

	static function list_empleados () {

		echo "List";

	}

	static function remove_empleado () {

		echo "Remove";

	}

	static function edit_empleado () {

		echo "Edit";

	}

}

?>