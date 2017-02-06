<?php
class ConexionBD{

	static function crear_tabla()
	{
		global $wpdb;
		$table_name = $wpdb->prefix . "empleadosPC";

		$sql = " CREATE TABLE $table_name(
		idEmpleado int(11) NOT NULL AUTO_INCREMENT,
		`nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
		`apellido` varchar(50) CHARACTER SET utf8 NOT NULL,
		`nss` varchar(14) CHARACTER SET utf8 NOT NULL,
		`fijo` int(11) NOT NULL,
		`ventasbrutas` float NOT NULL,
		`tarifacomision` float NOT NULL,
		PRIMARY KEY ( `idEmpleado` )
		) ;";

		$wpdb->query($sql);
	}


//description Hook que se ejecuta una sóla vez ideal para este caso

	//add_action( 'wp_footer', 'get_buscar' );

	/*static function get_buscar()
	{
		if(isset($_GET["s"]) && !empty($_GET["s"]))
		{
			global $wpdb;
			$table_name = $wpdb->prefix . 'empleadosPC';

			$wpdb->insert( 
				$table_name, 
				array( 
					'search' =>  esc_attr( $_GET["s"] )
					)
				);
		}
	}*/


//description Función que se ejecuta al desactivar el plugin

	static function  borrar_tabla()
	{
	//obtenemos el objeto $wpdb
		global $wpdb;

    //el nombre de la tabla, utilizamos el prefijo de wordpress
		$table_name = $wpdb->prefix . 'empleadosPC';

    //sql con el statement de la tabla
		$sql = "DROP table IF EXISTS $table_name";

		$wpdb->query($sql);
	}
}

?>