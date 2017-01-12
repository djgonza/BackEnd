<?php

class DaoEmpleado {

	private $db;

	public function DaoEmpleado () {

		$this->db = new DB();

	}

	public function getEmpleado ($nssEmpleado) {



	}

	public function insertEmpleado ($empleado) {

		$this->db->connect();

		$sql = "INSERT INTO `empleados` (`nombre`, `apellido`, `nss`, `fijo`, `ventasbrutas`, `tarifacomision`) VALUES (?, ?, ?, ?, ?, ?);";
		$args = array(
			utf8_decode($empleado->getNombre()),
			utf8_decode($empleado->getApellido()),
			utf8_decode($empleado->getNSS()),
			utf8_decode($empleado->getFijo()),
			utf8_decode($empleado->getVentasBrutas()),
			utf8_decode($empleado->getTarifaComision())
		);

		$this->db->execute($sql, $args);

		$this->db->disconnect();

	}

	public function updateEmpleado ($nss, $empleado) {

	}

	public function deleteEmpleado ($nss) {

		$this->db->connect();

		$this->db->execute("DELETE FROM `empleados` WHERE `empleados`.`nss` = '$nss'");

		$this->db->disconnect();

	}

	public function listEmpleados () {

		$this->db->connect();

		return $this->db->execute("SELECT * FROM `empleados`");

		$this->db->disconnect();


	}

	public function balance () {

	}

}

?>