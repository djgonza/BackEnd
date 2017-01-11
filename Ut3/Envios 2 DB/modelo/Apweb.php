<?php 

	class Apweb () {

		private $nombre;
		private $apellido;
		private $dni;
		private $edad;
		private $modulo;
		private $nota;
		private $curso;
		private $idiomas;

		public function Apweb ($nombre, $apellido, $dni, $edad, $modulo, $nota, $curso, $idiomas) {

			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->dni = $dni;
			$this->edad = $edad;
			$this->modulo = $modulo;
			$this->nota = $nota;
			$this->curso = $curso;
			$this->idiomas = $idiomas;

		}

		//
		public function getNombre () {
			return $this->nombre;
		}

		public function getApellido () {
			return $this->apellido;
		}

		public function getDni () {
			return $this->dni;
		}

		public function getEdad () {
			return $this->edad;
		}

		public function getModulo () {
			return $this->modulo;
		}

		public function getNota () {
			return $this->nota;
		}

		public function getCurso () {
			return $this->curso;
		}

		public function getIdomas () {
			return $this->idiomas;
		}

		//
		public function setNombre ($value) {
			$this->nombre = $value;
		}

		public function setApellido ($value) {
			$this->apellido = $value;
		}

		public function setDni ($value) {
			$this->dni = $value;
		}

		public function setEdad ($value) {
			$this->edad = $value;
		}

		public function setModulo ($value) {
			$this->modulo = $value;
		}




	}

?>