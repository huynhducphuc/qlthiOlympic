<?php
	class DBConnection {
		private $con;
		public function connect() {
			require_once 'Config.php';

			// connect to MySQL Database
			$this->con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

			if ($this->con->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			mysqli_set_charset($this->con,"utf8");
			return $this->con;
		}
	}
?>