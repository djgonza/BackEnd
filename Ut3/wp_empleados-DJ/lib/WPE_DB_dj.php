<?php 

/**
* 
*/
class WPE_DB {

	static function createTable () {

		global $wpdb;

		$sql = "CREATE TABLE IF NOT EXISTS `".PLUGIN_TABLE_NAME."` (
					`nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
					`apellido` varchar(50) CHARACTER SET utf8 NOT NULL,
					`nss` varchar(14) CHARACTER SET utf8 NOT NULL,
					`fijo` int(11) NOT NULL,
					`ventasbrutas` float NOT NULL,
					`tarifacomision` float NOT NULL
					) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

		$wpdb->query($sql);

	}

	static function deleteTable () {

		global $wpdb;

		$sql = "Drop table if EXISTS '".PLUGIN_TABLE_NAME."'";

		$wpdb->query($sql);

	}

	static function createPage ($title, $content) {

		$args = Array(
				'post_content' => $content,
				'post_title' => $title,
				'post_status' => "publish",
				'post_type' => "page",
				'comment_status' => "closed"
			);

		wp_insert_post($args);

	}

	static function deletePage ($title) {

		global $wpdb;
		wp_delete_post($wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_title = '".$title."'" ), true);
		//wp_delete_post(get_page_by_title($page_title), true);

	}

	static function listRows () {

		global $wpdb;
		return $empleados = $wpdb->get_results("SELECT * FROM ".PLUGIN_TABLE_NAME);

	}

	static function insert () {
	
		global $wpdb;
		$wpdb->query($wpdb->prepare("INSERT INTO ".PLUGIN_TABLE_NAME." values (%s, %s, %s, %d, %f, %f)", $_POST));

	}

	static function delete ($nss) {

		global $wpdb;
		$wpdb->query("DELETE FROM ".PLUGIN_TABLE_NAME." WHERE `nss` = '".$nss."'");

	}

	static function update ($empleado){

		global $wpdb;
		$wpdb->query($wpdb->prepare('UPDATE '.PLUGIN_TABLE_NAME.' SET nombre = %s, apellido = %s, fijo = %d, ventasbrutas = %f, tarifacomision = %f WHERE nss = %s', $empleado));

	}

	static function getEmpleado ($nss){

		global $wpdb;
		return $wpdb->get_results('SELECT * FROM '.PLUGIN_TABLE_NAME.' WHERE nss = "'.$nss.'"');

	}

	static function getEmpleados ($nss) {

		global $wpdb;
		return $wpdb->get_results('SELECT * FROM '.PLUGIN_TABLE_NAME.' WHERE nss like "%'.$nss.'%"');

	}

}

?>