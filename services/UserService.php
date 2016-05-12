<?php
	class UserService {
		private $con;

		// constructor
		function __construct() {
			require_once 'DBConnection.php';
			// connect to database
			$db = new DBConnection();
			$this->con = $db->connect();
		}

		// destructtor
		function __destruct() {

		}

		public function getUser($username, $password) {
			$stmt = $this->con->prepare("select nguoidung_id, ten, ngaysinh, diachi, tendangnhap, matkhau from nguoidung where tendangnhap = ? and matkhau = ?;");

			$stmt->bind_param("ss", $username, $password);
			
			$stmt->execute();

			$user = array();

			$stmt->bind_result($user['nguoidung_id'], $user['ten'], $user['ngaysinh'], $user['diachi'], $user['tendangnhap'], $user['matkhau']);

			if ($stmt->fetch()) {
				$stmt->close();
				return $user;
			} else {
				return FALSE;
			}

		}

		public function addUser($user) {
			$result = FALSE;
			if (!empty($user))  {
				$stmt = $this->con->prepare("insert into nguoidung(ten, ngaysinh, diachi, tendangnhap, matkhau) values(?, ?, ?, ?, ?);");

				$stmt->bind_param("sssss", $user['ten'], $user['ngaysinh'], $user['diachi'], $user['tendangnhap'], $user['matkhau']);

				$stmt->execute();

				$result = $stmt->insert_id;
				return $result;
			}
			return $result;
		}

		public function isUsernameExisted($username) {
			$stmt = $this->con->prepare("select * from nguoidung where tendangnhap = ?;");
			$stmt->bind_param("s", $username);
			$stmt->execute();
			return $stmt->fetch();
		}

	}
?>