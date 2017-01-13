<?php

class DB implements IDataBase {

	private $connection;

	public function DB () {

	}

	public function connect () {

		try{
			$this->connection = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME, DB_USER, DB_PASS);
			//$this->conexion->setAttibute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
			//$this->conexion->exec('SET names utf8');
		} catch (Exception $e){
			//$error = "Error: no se pudo conectar a la base de datos";
			//include 'vistas/error.php';
			exit();
		}

	}

	public function disconnect () {
		$this->connection = null;
	}

	/*public function execute ($sql, $args = NULL) {

		try{

			$result = $this->connection->prepare($sql);
			$result->execute($args);

			if($this->countRows ($result) > 0){
				return $result->fetchAll();
			}

			return;

		} catch (Exception $e){
			
			exit();

		}

	}*/

	public function execute ($sql, $args = NULL) {

		try {

			$result = $this->connection->prepare($sql);
			$result->execute($args);
			return $result->fetchAll();
			
		}catch (Exception $e){

			exit();

		}

	}

	public function executeAction ($sql, $args = NULL) {

		try {

			$result = $this->connection->prepare($sql);
			$result->execute($args);

		}catch (Exception $e){

		}

	}



	public function nextRow ($result) {
		return $result->fetch();
	}

	public function countRows ($result) {
		return $result->rowcount();
	}

}

?>