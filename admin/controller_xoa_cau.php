<?php

/**
 * @author DucPhuc
 * @copyright 2016
 */
    	include('../config/connectdb.php');
		$id=$_POST['id'];
		$sql = "DELETE FROM `cau` WHERE cau_id=".$id; 
		$result = mysql_query($sql,$link);
		if ( !$result ) {
			echo "Không thểthực hiện được câu lệnh SQL:".mysql_error($link); 
			
		}else{
			$msg ="Bạn đã xóa câu mã ".$id." thành công";
			include_once 'danhsach_cau.php';
		}
    

?>