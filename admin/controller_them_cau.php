<?php

/**
 * @author DucPhuc
 * @copyright 2016
 */

    $linhvuc_id = $_POST['linhvuc_id'];
    $noidung = $_POST['noidung'];
    $dapan_dung = $_POST['dapan_dung'];
    $dapan_sai = $_POST['dapan_sai'];
    $i = count($dapan_sai);
    
    
    include('../config/connectdb.php');
    $sql = "INSERT INTO `cau` (`cau_id`, `linhvuc_id`, `noidung`) VALUES (NULL, '$linhvuc_id', '$noidung')";
    
    $result = mysql_query($sql,$link);
    $cau_id = mysql_insert_id();
    
    if ( !$result ) {
    	echo "Không thểthực hiện được câu lệnh SQL:".mysql_error($link); 	
    }else{
        $result_2 = mysql_query("INSERT INTO `cau_dapan` (`cau_dapan_id`, `cau_id`, `dapandung`, `noidungdapan`) VALUES (NULL, '$cau_id', b'1', '$dapan_dung')",$link);
    	if ( !$result_2 ) {
    	   echo "Không thểthực hiện được câu lệnh SQL thêm câu tl đúng:".mysql_error($link); 	
        }else{
            for($j=0; $j < $i; $j++)
            {
              $result_3 = mysql_query("INSERT INTO `cau_dapan` (`cau_dapan_id`, `cau_id`, `dapandung`, `noidungdapan`) VALUES (NULL, '$cau_id', b'0', '$dapan_sai[$j]')",$link);
            }
            if ( !$result_3 ) {
        	   echo "Không thểthực hiện được câu lệnh SQL thêm câu tl sai:".mysql_error($link); 	
            }else{
                $msg ="Bạn đã thêm câu thành công";
            	include_once 'danhsach_cau.php';
            }
        }
   }
?>