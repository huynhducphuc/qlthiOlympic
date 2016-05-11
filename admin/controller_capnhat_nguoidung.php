<?php

/**
 * @author DucPhuc
 * @copyright 2016
 */

    $id = $_POST['id'];
    $ten = $_POST['ten'];
    $ngaysinh = $_POST['ngaysinh'];
    $diachi = $_POST['diachi'];
    $tendangnhap = $_POST['tendangnhap'];
    $matkhau = $_POST['matkhau'];
    include('../config/connectdb.php');
    $sql = "UPDATE `nguoidung` SET `ten` = '$ten', `ngaysinh` = STR_TO_DATE('$ngaysinh','%d/%m/%Y'), `diachi` = '$diachi', `tendangnhap` = '$tendangnhap', `matkhau` = '$matkhau' WHERE `nguoidung`.`nguoidung_id` = $id";
    $result = mysql_query($sql,$link);
    if ( !$result ) {
    	echo "Không thể thực hiện được câu lệnh SQL:".mysql_error($link); 
    	
    }else{
    	$msg ="Cập nhật người dùng mã ".$id." thành công";
    	include_once 'danhsach_nguoidung.php';
    }
   
?>