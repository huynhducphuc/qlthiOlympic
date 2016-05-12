<?php
	require_once '../services/UserService.php';
	$db = new UserService();

	$result = "no suggestion";

	if (isset($_REQUEST['u'])) {
		$username = $_REQUEST['u'];
		$isExisted = $db->isUsernameExisted($username);

		if ($isExisted == TRUE) {
			$result = "<span style='color: red;font-size: 13px;'>Username already exists</span>";
		} else {
			$result = "<span style='color: green;font-size: 13px;'>Available Username</span>";
		}

	} 


	echo $result;

?>