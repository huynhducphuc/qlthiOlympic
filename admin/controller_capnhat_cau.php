<?php

/**
 * @author DucPhuc
 * @copyright 2016
 */
    $cau_id     = $_POST['cau_id'];
    $linhvuc_id = $_POST['linhvuc_id'];
    $noidung    = $_POST['noidung'];
    $dapan_dung = $_POST['dapan_dung'];
    $dapan_sai  = $_POST['dapan_sai'];
    $i = count($dapan_sai);
    
    include('../config/connectdb.php');
    $sql = "UPDATE `cau` SET `linhvuc_id` = '$linhvuc_id', `noidung` = '$noidung' WHERE `cau`.`cau_id` = $cau_id";
    $result = mysql_query($sql,$link);
    if ( !$result ) {
    	echo "Không thểthực hiện được câu lệnh SQL:".mysql_error($link); 
    	
    }else{
        $result_2 = mysql_query("DELETE FROM `cau_dapan` WHERE `cau_dapan`.`cau_id` = $cau_id",$link);
        if ( !$result_2 ) {echo "Không thểthực hiện được câu lệnh SQL:".mysql_error($link);}
        $result_2 = mysql_query("INSERT INTO `cau_dapan` (`cau_dapan_id`, `cau_id`, `dapandung`, `noidungdapan`) VALUES (NULL, '$cau_id', b'1', '$dapan_dung')",$link);
    	for($j=0; $j < $i; $j++)
        {
          $result_2 = mysql_query("INSERT INTO `cau_dapan` (`cau_dapan_id`, `cau_id`, `dapandung`, `noidungdapan`) VALUES (NULL, '$cau_id', b'0', '$dapan_sai[$j]')",$link);
        }
    	$msg ="Bạn đã cập nhật câu mã ".$cau_id." thành công";
    	include_once 'danhsach_cau.php';
    }
   
?>