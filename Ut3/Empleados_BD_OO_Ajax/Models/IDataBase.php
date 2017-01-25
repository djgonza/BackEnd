<?php 

	interface IDataBase {

		public function connect ();

		public function disconnect ();

		public function execute ($sql, $args);

		public function countRows ($result);

		public function nextRow ($result);

	}
	
?>