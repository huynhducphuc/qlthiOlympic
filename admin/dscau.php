<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="author" content="DucPhuc" />
    	<title>DSCau</title>
    </head>
    
    <body>
        <a href="them_cau.php">Thêm mới</a>
        <?php 
            if(isset($msg)!=null){
				echo "<p style='color:red'>".$msg."</p>";
			}
            include('../config/connectdb.php');
            $sql = "SELECT c.cau_id, c.linhvuc_id, c.noidung, lv.ten FROM cau c INNER JOIN linhvuc lv ON c.linhvuc_id = lv.linhvuc_id";
            $result = mysql_query($sql,$link);
            $num = mysql_num_rows($result);          
            if($num>0){
        ?>
        <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Lĩnh vực</th>
                    <th>Nội dung</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($row = mysql_fetch_array($result)){
                        echo("<tr>");
                        echo("<td>".$row['cau_id']."</td>" );
                        echo("<td>".$row['ten']."</td>" );
                        echo("<td>".$row['noidung']."</td>" );
                ?>
                    <td>
                        <a href='capnhat_cau.php?id=<?php echo $row['cau_id'];  ?>'>Cập nhật</a>
    					<a href='controller_xoa_cau.php?id=<?php echo $row['cau_id'];  ?>'
                        onclick="return confirm('Are you sure you want to delete this item?');" >Xóa</a>
    				</td>
                 <?php }   
                    mysql_free_result($result);
                    mysql_close($link);
                ?>
            </tbody>
        </table>
        <?php } ?>
    </body>
</html>