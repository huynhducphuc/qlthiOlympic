<?php

/**
 * @author DucPhuc
 * @copyright 2016
 */
    	include('../config/connectdb.php');
		$id=$_POST['id'];
		$sql = "DELETE FROM `linhvuc` WHERE linhvuc_id=".$id; 
		$result = mysql_query($sql,$link);
		if ( !$result ) {
            echo $id;
			echo "Không thểthực hiện được câu lệnh SQL:".mysql_error($link); 
			
		}else{
			$msg ="Bạn đã xóa lĩnh vực mã ".$id." thành công";
			include_once 'danhsach_linhvuc.php';
		}
    

?>