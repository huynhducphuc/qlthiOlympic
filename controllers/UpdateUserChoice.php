<?php
	require_once '../services/TestService.php';
	$db = new TestService();

	$result = "khong co gi de xem";

	if (isset($_REQUEST['maBaiLam']) && isset($_REQUEST['maCau']) && isset($_REQUEST['dapAnNguoiDung'])) {
		$maBaiLam = $_REQUEST['maBaiLam'];
		$maCau = $_REQUEST['maCau'];
		$dapAnNguoiDung = $_REQUEST['dapAnNguoiDung'];

		$result = $db->updateUserChoice($maBaiLam, $maCau, $dapAnNguoiDung);

	}

	echo $result;

?>