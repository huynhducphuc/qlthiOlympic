<?php

/**
 * @author DucPhuc
 * @copyright 2016
 */
    	include('../config/connectdb.php');
		$id=$_POST['id'];
		$sql = "DELETE FROM `nguoidung` WHERE nguoidung_id=".$id; 
		$result = mysql_query($sql,$link);
		if ( !$result ) {
			echo "Không thểthực hiện được câu lệnh SQL:".mysql_error($link); 
			
		}else{
			$msg ="Bạn đã xóa người dùng mã ".$id." thành công";
			include_once 'danhsach_nguoidung.php';
		}
    

?>