<?php

/**
 * @author DucPhuc
 * @copyright 2016
 */

    $id = $_POST['linhvuc_id'];
    $ten = $_POST['ten'];
    $mota = $_POST['mota'];
    $anh = $_POST['anh'];
    include('../config/connectdb.php');
    $sql = "UPDATE `linhvuc` SET `ten` = '$ten', `mota` = '$mota', `anh` = '$anh' WHERE `linhvuc`.`linhvuc_id` = $id";
    $result = mysql_query($sql,$link);
    if ( !$result ) {
    	echo "Không thểthực hiện được câu lệnh SQL:".mysql_error($link); 
    	
    }else{
    	$msg ="Bạn đã cập nhật lĩnh vực mã ".$id." thành công";
    	include_once 'danhsach_linhvuc.php';
    }
   
?>