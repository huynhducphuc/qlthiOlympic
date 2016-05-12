<?php
	require_once '../services/UserService.php';
	$db = new UserService();

	if (isset($_REQUEST['username']) && isset($_REQUEST['password']) && isset($_REQUEST['fullname'])) {

		$user = array();
		$user['ten'] = $_REQUEST['fullname'];
		$user['ngaysinh'] = $_REQUEST['birthday'];
		$user['diachi'] = $_REQUEST['address'];
		$user['tendangnhap'] = $_REQUEST['username'];
		$user['matkhau'] = $_REQUEST['password'];
		
		$result = $db->addUser($user);

		if ($result > 0) {
			header('location: ../login.php');
		} else {
			echo "Sign Up failed !"."<br>";
		}

	} else {
		echo "Not input enough values yet !"."<br>";
	}
	

?>