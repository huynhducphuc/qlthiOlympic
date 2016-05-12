<?php
	require_once '../services/ResultService.php';
	$db = new ResultService();

	if (isset($_REQUEST['userId'])) {
		$userId = $_REQUEST['userId'];

		$results = $db->getAllResults($userId);

		foreach ($results as $ketqua) {
			echo $ketqua['bailam_id'].$ketqua['tenlinhvuc'].$ketqua['caudung'].$ketqua['causai'].$ketqua['tongcau']."<br>";
		}

	} else {
		echo "Not set UserId yet !"."<br>";
	}
?>