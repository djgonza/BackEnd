<?php 

/**
* 
*/
class DB {

	static function createTable () {

		global $wpdb;

		$sql = "CREATE TABLE IF NOT EXISTS `".$wpdb->prefix."empleados` (
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

		$sql = "Drop table if EXISTS ".$wpdb->prefix."empleados";

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



	}

}

?>