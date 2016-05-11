<?php 
    $id = $_GET['id'];
    if(!is_numeric($id)){
        Header( "Location: danhsach_bailam.php" );
        exit;
    } 
    include('../config/connectdb.php');
    $sql = "SELECT bl.bailam_id, bl.dapannguoidung_id, c.noidung, c.cau_id FROM bailam_cau bl INNER JOIN cau AS c ON bl.cau_id = c.cau_id WHERE bailam_id=".$id;
    $sql_2 = "SELECT bl.bailam_id, bl.dapannguoidung_id, c.noidung, c.cau_id, da.noidungdapan, da.dapandung, da.cau_dapan_id FROM bailam_cau bl INNER JOIN cau AS c ON bl.cau_id = c.cau_id INNER JOIN cau_dapan AS da ON c.cau_id = da.cau_id WHERE bailam_id=".$id;
    $result = mysql_query($sql,$link);
    $result_2 = mysql_query($sql_2,$link);
    $num = mysql_num_rows($result);
    if($num<=0){
        Header( "Location: danhsach_bailam.php" );
        exit;
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="author" content="DucPhuc" />
    	<title>CNCau</title>
        <script type="text/javascript" src="bootstrap/js/jquery-2.0.0.min.js"></script><em></em>
    </head>
    
    <body>
        <?php 
            if($num>0){
                $causo = 0;
                $dapan = 0;
                while($row = mysql_fetch_array($result)){
                $causo = $causo + 1;
        ?>
                <span><?php echo "Câu ".$causo.": ". $row['noidung'];?></span><br />
                <?php 
                    $result_2 = mysql_query($sql_2,$link);
                    while($row_2 = mysql_fetch_array($result_2)){ 
                        if($row['cau_id']==$row_2['cau_id']){
                            $dapan = $dapan + 1;
                ?>
                    <span><?php echo $dapan.". ". $row_2['noidungdapan'];?></span>
                    <?php if($row['dapannguoidung_id']==$row_2['cau_dapan_id']){
                            if($row_2['dapandung']==1) echo 'Đúng';
                            else echo 'Sai';
                            }
                    ?>
                    <br />
        <?php           }
                    }
                    $dapan = 0;
                }
            }
            mysql_free_result($result);
            mysql_free_result($result_2);
            mysql_close($link);
        ?>
    </body>
    
</html>