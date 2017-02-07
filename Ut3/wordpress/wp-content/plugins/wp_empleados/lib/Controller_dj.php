<?php 

class WPE_Controller {

	function WPE_Controller () {

		/* Creacion del menu en el backend */
		add_action('admin_menu', array(&$this, "createMenu"));
		/* Style */
		add_action('admin_enqueue_scripts', array(&$this, "includeStyle"));

		//Borrar un empleado
		if(isset($_POST["delete"])){
			$this->remove();
		}

	}

	function includeStyle () {
		wp_register_style('admin_css', plugins_url('css/style.css', PLUGIN_CSS_PATH));
		wp_enqueue_style('admin_css');
	}

	function createMenu () {

		/* 
			Crear menus en el backend 
			Nota: Todas las llamadas se han de hacer desde aqui para no perder el ambito de las variables
		*/
		add_menu_page("Wp Empleados", "Empleados", 'manage_options', "wp_empleados", array(&$this, 'listRows'), "dashicons-welcome-add-page", "30");
		add_submenu_page("wp_empleados", "Insertar Empleado", "Insetar Empleados", "administrator", "wp_empleados_insert", array(&$this, 'insert'));
		add_submenu_page("wp_empleados", "Editar Empleados", "Editar Empleados", "administrator", "wp_empleados_edit", array(&$this, 'edit'));
		add_submenu_page("wp_empleados", "Buscar Empleados", "Buscar Empleados", "administrator", "wp_empleados_search", array(&$this, 'search'));

	}

	function cleanData () {
		foreach ($_POST as $key => $value) {
			$_POST[$key] = htmlspecialchars($_POST[$key]);
		}
	}

	function createValidatorRules () {

		return array(
			"nombre" => array("requiered" => true),
			"apellido" => array("requiered" => true),
			"nss" => array("requiered" => true),
			"fijo" => array("requiered" => true),
			"ventasbrutas" => array("requiered" => true),
			"tarifacomision" => array("min" => 2, "requiered" => true)
			);

	}


	function insert () {

		// Validamos los datos
		if (isset($_POST["insert"])){

			// Limpiamos los datos
			$this->cleanData ();

			// Creamos el validador
			$validator = new WPE_Validator ();
			$validator->setValidatorRules ($this->createValidatorRules ());
			$validator->validate ($_POST);

			// Validamos
			if ($validator->isValid()){

				// Insertamos en la DB
				WPE_DB::insert();
				echo "<div id='wpe_messaje'>Registro Insertado</div>";

			}

		}

		include PLUGIN_VIEWS_PATH."insert.php";
		
	}

	function listRows () {


		$empleados = WPE_DB::listRows();
		include PLUGIN_VIEWS_PATH."list.php";

	}

	function remove () {

		WPE_DB::delete($_POST["nss"]);

	}

	function edit () {

		if(isset($_POST["edit"])){
			


		}


	}

	function search () {

		echo "search";

	}

}

?>