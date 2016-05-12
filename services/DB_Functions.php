<?php
	class DB_Functions {
		private $conn;

		// constructor
		function __construct() {
			require_once 'DB_Connect.php';

			// connect to database
			$db = new DB_Connect();
			$this->conn = $db->connect();
		}

		// destructor
		function __destruct() {

		}

		public function storeUser($username, $password) {
			$stmt = $this->conn->prepare("INSERT INTO users(username, password) VALUES(?, ?)");
			$stmt->bind_param("ss", $username, $password);
			$result = $stmt->excute();
			$stmt->close();

			// check for successful store
			if ($result) {
				
				$stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ? and password = ?");
				$stmt->bind_param("ss", $username, $password);
				$stmt->execute();
				$user = $stmt->get_result()->fetch_assoc();
				$stmt->close();

				echo "DB_Functions: ".$this->conn;

				return $user;
				
			} else {
				return FALSE;
			}

		}

		public function getUserByUsernamAndPassword($username, $password) {
			$stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ? and password = ?");
				$stmt->bind_param("ss", $username, $password);

				$stmt->execute();
				
				$user = array();
				$stmt->bind_result($user['id'], $user['username'], $user['password']);

				if ($stmt->fetch()) {
					// $user = $stmt->get_result()->fetch_assoc();
					$stmt->close();
					return $user;
				} else {
					return NULL;
				}		
		}

		public function isUserExisted($username) {
			$stmt = $this->conn->prepare("SELECT * from users WHERE username = ?");

	        $stmt->bind_param("s", $username);

	        $stmt->execute();

	        $stmt->store_result();

	        if ($stmt->num_rows > 0) {
	            // user existed 
	            $stmt->close();
	            return true;
	        } else {
	            // user not existed
	            $stmt->close();
	            return false;
	        }
		}

	}

?>