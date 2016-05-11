<?php

/**
 * @author DucPhuc
 * @copyright 2016
 */

    $ten = $_POST['ten'];
    $ngaysinh = $_POST['ngaysinh'];
    $diachi = $_POST['diachi'];
    $tendangnhap = $_POST['tendangnhap'];
    $matkhau = $_POST['matkhau'];
    include('../config/connectdb.php');
    $sql = "INSERT INTO `nguoidung` (`nguoidung_id`, `ten`, `ngaysinh`, `diachi`, `tendangnhap`, `matkhau`) VALUES  (NULL, '$ten', STR_TO_DATE('$ngaysinh','%d/%m/%Y'), '$diachi', '$tendangnhap', '$matkhau')";
    $result = mysql_query($sql,$link);
    if ( !$result ) {
    	echo "Không thể thực hiện được câu lệnh SQL:".mysql_error($link); 
    	
    }else{
    	$msg ="Thêm người dùng ".$ten." thành công";
    	include_once 'danhsach_nguoidung.php';
    }
   
?>