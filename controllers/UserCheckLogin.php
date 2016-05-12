<?php
	define("ROOT_PATH", $_SERVER['DOCUMENT_ROOT'].'/qlthiolympic');
	require_once '../core/SessionManager.php';
	require_once '../services/UserService.php';
	SessionManager::init();
	$db = new UserService();


	if (isset( $_REQUEST["username"]) && $_REQUEST["password"]) {
		$username = $_REQUEST["username"];
		$password = $_REQUEST["password"];

		$user = $db->getUser($username, $password);

		if ($user != NULL) {
			// set session
			SessionManager::setLoggedIn(TRUE);
			SessionManager::set("user", $user);

			// success
			header('location: ../chooseatest.php');
		} else {
			$msg = "Invalid username or password !";
			include_once("../login.php");
			// header('location: ../login.php');
		}

	} else {
		echo "Not set username yet !".'<br>';
	}
	
?>