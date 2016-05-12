<?php
class TestService {
	private $con;

	function __construct() {
		require_once 'DBConnection.php';
		// connect to database
		$db = new DBConnection();
		$this->con = $db->connect();
	}

	function __destruct() {

	}

	public function getAllTopics() {
		$stmt = $this->con->prepare("select linhvuc_id, ten, mota, anh from linhvuc;");
		$stmt->execute();

		$dsLinhVuc = array();
		$linhvuc = array();

		$stmt->bind_result($linhvuc['linhvuc_id'], $linhvuc['ten'], $linhvuc['mota'], $linhvuc['anh']);

		$count = 0;
		while ($stmt->fetch()) {
			$dsLinhVuc[$count]['linhvuc_id'] = $linhvuc['linhvuc_id'];
			$dsLinhVuc[$count]['ten'] = $linhvuc['ten'];
			$dsLinhVuc[$count]['mota'] = $linhvuc['mota'];
			$dsLinhVuc[$count]['anh'] = $linhvuc['anh'];
			$count++;
		}

		$stmt->close();

		return $dsLinhVuc;
	}

	public function getQuestions($malinhvuc, $socau) {
		$stmt = $this->con->prepare("select cau_id, linhvuc_id, noidung from cau where linhvuc_id = ? order by rand() limit ?;");
		$stmt->bind_param("ss", $malinhvuc, $socau);
		$stmt->execute();

		$questions = array();
		$question = array();

		$stmt->bind_result($question['cau_id'], $question['linhvuc_id'], $question['noidung']);

		$count = 0;
		while($stmt->fetch()) {
			$questions[$count]['cau_id'] = $question['cau_id'];
			$questions[$count]['linhvuc_id'] = $question['linhvuc_id'];
			$questions[$count]['noidung'] = $question['noidung'];
			$count++;
		}

		$stmt->close();

		return $questions;
	}

	public function insertTest($maNguoiDung, $maLinhVuc) {
		$stmt = $this->con->prepare("insert into bailam(nguoidung_id, linhvuc_id, thoigiannop) value (?, ?, ?);");

		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$thoigiannop = date("Y-m-d H:i:s");

		$stmt->bind_param("sss", $maNguoiDung, $maLinhVuc, $thoigiannop);
		$stmt->execute();

		$insertId = 0;
		$insertId = $stmt->insert_id;

		$stmt->close();
		return $insertId;
	}

	public function insertTestQuestion($maBaiLam, $maCau) {
		$stmt = $this->con->prepare("insert into bailam_cau(bailam_id, cau_id, dapannguoidung_id) value(?, ?, 0);");
		
		$stmt->bind_param("ss", $maBaiLam, $maCau);
		$stmt->execute();
		$stmt->close();
	}

	public function getTestQuestions($mabl) {
		$stmt = $this->con->prepare("select blc.bailam_id, blc.cau_id, blc.dapannguoidung_id, c.noidung from bailam_cau blc join cau c on c.cau_id = blc.cau_id where bailam_id = ?;");
		$stmt->bind_param("s", $mabl);

		$dsKetQua = array();
		$ketQua = array();

		$stmt->bind_result($ketQua['bailam_id'], $ketQua['cau_id'], $ketQua['dapannguoidung_id'], $ketQua['noidung']);

		$stmt->execute();
		$count = 0;
		while ($stmt->fetch()) {
			$dsKetQua[$count]['bailam_id'] = $ketQua['bailam_id'];
			$dsKetQua[$count]['cau_id'] = $ketQua['cau_id'];
			$dsKetQua[$count]['dapannguoidung_id'] = $ketQua['dapannguoidung_id'];
			$dsKetQua[$count]['noidung'] = $ketQua['noidung'];
			$count++;
		}
		$stmt->close();
		return $dsKetQua;
	}

	public function getQuestionAnswers($questionId) {
		$stmt = $this->con->prepare("select cau_dapan_id, cau_id, dapandung, noidungdapan from cau_dapan where cau_id = ? order by rand();");
		$stmt->bind_param("s", $questionId);

		$dsKetQua = array();
		$ketQua = array();

		$stmt->bind_result($ketQua['cau_dapan_id'], $ketQua['cau_id'], $ketQua['dapandung'], $ketQua['noidungdapan']);
		$stmt->execute();
		$count = 0;
		while ($stmt->fetch()) {
			$dsKetQua[$count]['cau_dapan_id'] = $ketQua['cau_dapan_id'];
			$dsKetQua[$count]['cau_dapan_id'] = $ketQua['cau_dapan_id'];
			$dsKetQua[$count]['dapandung'] = $ketQua['dapandung'];
			$dsKetQua[$count]['noidungdapan'] = $ketQua['noidungdapan'];
			$count++;
		}
		$stmt->close();
		return $dsKetQua;
	}

	public function updateUserChoice($maBaiLam, $maCau, $dapAnNguoiDung) {
		$stmt = $this->con->prepare("update bailam_cau set dapannguoidung_id = ? where bailam_id = ? and cau_id = ?;");
		$stmt->bind_param("sss", $dapAnNguoiDung, $maBaiLam, $maCau);

		$stmt->execute();
		$result = $stmt->affected_rows;
		$stmt->close();
		return $result;
	}
}
?>