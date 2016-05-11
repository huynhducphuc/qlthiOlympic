<?php

/**
 * @author DucPhuc
 * @copyright 2016
 */

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    include('../config/connectdb.php');
    $sql = "SELECT COUNT(*) AS `ad` FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
    $result = mysql_query($sql,$link);
    if ( !$result ) {
    	echo "Không thểthực hiện được câu lệnh SQL:".mysql_error($link); 
    	
    }else{
        $row = mysql_fetch_array($result);
        if($row['ad']==0) Header( "Location: login.php" );
        else {
            session_start();
            $_SESSION['username'] = $username;
            Header( "Location: danhsach_linhvuc.php" );
        }
    }
   

?>