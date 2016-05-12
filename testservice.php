<?php
	ob_start();
	require_once $_SERVER['DOCUMENT_ROOT'].'/qlthiolympic/core/SessionManager.php';
	require_once 'services/TestService.php';
    SessionManager::init();
    $db = new TestService();

    if (isset($_REQUEST['malinhvuc']) && isset($_REQUEST['socau'])) {
		// get parameters
		$malinhvuc = $_REQUEST['malinhvuc'];
		$socau = $_REQUEST['socau'];
		$user = SessionManager::get('user');

		// create a test
		//// insert a test
		$testId = $db->insertTest($user['nguoidung_id'], $malinhvuc);
		
		echo "ma nguoi dung: ".$user['nguoidung_id']."<br>";
		echo "ma linh vuc: ".$malinhvuc."<br>";
		echo "testID: ".$testId."<br>";


	} else {
		echo "Chua set du lieu cho bien !";
	}
?>