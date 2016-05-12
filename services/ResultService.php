<?php
class ResultService {
	private $con;

	// constructor
	function __construct() {
		require_once 'DBConnection.php';
		// connect to database
		$db = new DBConnection();
		$this->con = $db->connect();
	}

	// destructor
	function __destruct() {

	}

	public function getAllResults($userId) {
		$stmt = $this->con->prepare("select bl.bailam_id, lv.ten as tenlinhvuc, SUM(case da.dapandung WHEN '1' then 1 else 0 end) AS caudung, SUM(case da.dapandung WHEN '0' then 1 else 0 end) AS causai, COUNT(bc.cau_id) AS tongcau FROM bailam  bl JOIN bailam_cau bc ON bl.bailam_id = bc.bailam_id JOIN cau_dapan da ON bc.cau_id = da.cau_id AND bc.dapannguoidung_id = da.cau_dapan_id JOIN linhvuc lv ON lv.linhvuc_id = bl.linhvuc_id  WHERE bl.nguoidung_id = ? GROUP BY bl.bailam_id;");
		
		$stmt->bind_param("s", $userId);
		$stmt->execute();

		$dsKetQua = array();
		$ketqua = array();

		$stmt->bind_result($ketqua['bailam_id'], $ketqua['tenlinhvuc'], $ketqua['caudung'], $ketqua['causai'], $ketqua['tongcau']);

		$count = 0;
		while ($stmt->fetch()) {
			$dsKetQua[$count]['bailam_id'] = $ketqua['bailam_id'];
			$dsKetQua[$count]['tenlinhvuc'] = $ketqua['tenlinhvuc'];
			$dsKetQua[$count]['caudung'] = $ketqua['caudung'];
			$dsKetQua[$count]['causai'] = $ketqua['causai'];
			$dsKetQua[$count]['tongcau'] = $ketqua['tongcau'];
			$count++;
		}
		$stmt->close();

		return $dsKetQua;
	}

	public function getResult($userId, $testId) {
		$stmt = $this->con->prepare("select bl.bailam_id, lv.ten as tenlinhvuc, SUM(case da.dapandung WHEN '1' then 1 else 0 end) AS caudung, SUM(case da.dapandung WHEN '0' then 1 else 0 end) AS causai, COUNT(bc.cau_id) AS tongcau FROM bailam  bl JOIN bailam_cau bc ON bl.bailam_id = bc.bailam_id JOIN cau_dapan da ON bc.cau_id = da.cau_id AND bc.dapannguoidung_id = da.cau_dapan_id JOIN linhvuc lv ON lv.linhvuc_id = bl.linhvuc_id  WHERE bl.nguoidung_id = ? AND bl.bailam_id = ? GROUP BY bl.bailam_id;");
		
		$stmt->bind_param("ss", $userId, $testId);
		$stmt->execute();

		$ketqua = array();

		$stmt->bind_result($ketqua['bailam_id'], $ketqua['tenlinhvuc'], $ketqua['caudung'], $ketqua['causai'], $ketqua['tongcau']);

		if ($stmt->fetch()) {
			$stmt->close();
			return $ketqua;
		}

		return FALSE;
	}
}
?>