<?php

/**
 * @author DucPhuc
 * @copyright 2016
 */

    $ten = $_POST['ten'];
    $mota = $_POST['mota'];
    $anh = $_POST['anh'];
    include('../config/connectdb.php');
    $sql = "INSERT INTO `linhvuc` (`linhvuc_id`, `ten`, `mota`, `anh`) VALUES (NULL, '$ten', '$mota', '$anh')";
    $result = mysql_query($sql,$link);
    if ( !$result ) {
    	echo "Không thểthực hiện được câu lệnh SQL:".mysql_error($link); 
    	
    }else{
    	$msg ="Bạn đã thêm lĩnh vực ".$ten." thành công";
    	include_once 'danhsach_linhvuc.php';
    }
   
?>