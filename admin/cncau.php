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
            $id = $_GET['id'];
            include('../config/connectdb.php');
            $sql = "SELECT c.cau_id, c.linhvuc_id, c.noidung, lv.ten FROM cau c INNER JOIN linhvuc lv ON c.linhvuc_id = lv.linhvuc_id WHERE cau_id=".$id;
            $result = mysql_query($sql,$link);
            $num = mysql_num_rows($result);
            if($num>0){
                $row = mysql_fetch_array($result);
                $cau_id = $row['cau_id'];
        ?>
        <form method="post" action="controller_capnhat_cau.php">
            <input type="hidden" name="cau_id" value="<?php echo $row['cau_id'];  ?>"/>
            id<input type="text" value="<?php echo $row['cau_id']; ?>" disabled="disabled"/><br />
            Lĩnh vực
                <?php 
                    $linhvuc_id = $row['linhvuc_id'];
                    $sql_linhvuc = "SELECT * FROM linhvuc";
                    $result_linhvuc = mysql_query($sql_linhvuc,$link);
                    $num_linhvuc = mysql_num_rows($result_linhvuc);          
                    if($num_linhvuc>0){   
                ?>
                <select name="linhvuc_id">
                    <?php while($row_linhvuc = mysql_fetch_array($result_linhvuc)){?>
                    <option value="<?php echo $row_linhvuc['linhvuc_id'] ;?>" <?php if($linhvuc_id==$row_linhvuc['linhvuc_id']) {?> selected="selected" <?php } ?>><?php echo $row_linhvuc['ten'] ;?></option>
                    <?php }}?>
                </select><br />
            Nội dung câu hỏi<textarea name="noidung"><?php echo $row['noidung']; ?></textarea><br />
            <?php 
                $sql_dapandung = "SELECT * FROM `cau_dapan` WHERE cau_id =".$cau_id." AND dapandung = 1";
                $result_dapandung = mysql_query($sql_dapandung,$link);
                $row_dapandung = mysql_fetch_array($result_dapandung);
            ?>
            Đáp án đúng<input type="text" name="dapan_dung" value="<?php echo $row_dapandung['noidungdapan'];?>"/><br />
            Đáp án sai
            <?php 
                $sql_dapansai = "SELECT * FROM `cau_dapan` WHERE cau_id =".$cau_id." AND dapandung = 0";
                $result_dapansai = mysql_query($sql_dapansai,$link);
                $num_dapansai = mysql_num_rows($result_dapansai);          
                if($num_dapansai>0){  
                    if($row_dapansai = mysql_fetch_array($result_dapansai)) ?>
                    <div><input type="text" name="dapan_sai[]" value="<?php echo $row_dapansai['noidungdapan'];?>"/></div>
            <?php
                    while($row_dapansai = mysql_fetch_array($result_dapansai)){   
                        echo "<div class='phuc_input_fields_wrap'>";
            ?>
            
                
                    <div><input type="text" name="dapan_sai[]" value="<?php echo $row_dapansai['noidungdapan'];?>"/><a href="#" class="phuc_remove_field">Remove</a></div>
                
            <?php 
                    echo '</div>';
                  }}
            ?>
                <div class="phuc_input_fields_wrap_add">
                    <div></div>
                </div>
                <button class="phuc_add_field_button">+</button><br />
                
            <input type="submit" value="Cập nhật"/>
            <a href="danhsach_cau.php">Hủy</a>
        </form>
        <?php }
            mysql_free_result($result);
            mysql_free_result($result_linhvuc);
            mysql_close($link);
        ?>
    <script>
        $(document).ready(function() {
            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $(".phuc_input_fields_wrap"); //Fields wrapper
            var wrapper_add         = $(".phuc_input_fields_wrap_add"); //Fields wrapper
            var add_button      = $(".phuc_add_field_button"); //Add button ID
            
            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper_add).append('<div><input type="text" name="dapan_sai[]"/><a href="#" class="phuc_remove_field">Remove</a></div>'); //add input box
                }
            });
            
            $(wrapper).on("click",".phuc_remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
            $(wrapper_add).on("click",".phuc_remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        });   
    </script>
    </body>
    
</html>