<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="author" content="DucPhuc" />
    	<title>ThemCau</title>
        <script type="text/javascript" src="bootstrap/js/jquery-2.0.0.min.js"></script>
    </head>
    
    <body>
        <?php 
            include('../config/connectdb.php');
            $sql = "SELECT * FROM linhvuc";
            $result = mysql_query($sql,$link);
            $num = mysql_num_rows($result);          
            if($num>0){
        ?>
        <form method="post" action="controller_them_cau.php" id="myForm">
            Lĩnh vực
                <select name="linhvuc_id">
                    <?php while($row = mysql_fetch_array($result)){?>
                    <option value="<?php echo $row['linhvuc_id'] ;?>"><?php echo $row['ten'] ;?></option>
                    <?php }?>
                </select><br />
            Nội dung câu hỏi
                <textarea name="noidung"></textarea><br />
            Đáp án đúng<input type="text" name="dapan_dung"/><br />
            Đáp án sai
                <div class="phuc_input_fields_wrap">
                    <div><input type="text" name="dapan_sai[]"/></div>
                </div>
                <button class="phuc_add_field_button">+</button><br />
            <input type="submit" value="Thêm"/>
            <a href="danhsach_cau.php">Hủy</a>
        </form>
        <?php }else echo "<p style='color:red'>Tạo lĩnh vực trước!</p>"; ?>
        
        
        <script>
            $(document).ready(function() {
                var max_fields      = 10; //maximum input boxes allowed
                var wrapper         = $(".phuc_input_fields_wrap"); //Fields wrapper
                var add_button      = $(".phuc_add_field_button"); //Add button ID
                
                var x = 1; //initlal text box count
                $(add_button).click(function(e){ //on add input button click
                    e.preventDefault();
                    if(x < max_fields){ //max input box allowed
                        x++; //text box increment
                        $(wrapper).append('<div id="div_cha"><div id="div_con"><input type="text" name="dapan_sai[]"/><a href="#" class="phuc_remove_field">Remove</a></div></div>'); //add input box
                    }
                });
                
                $(wrapper).on("click",".phuc_remove_field", function(e){ //user click on remove text
                    e.preventDefault(); $(this).parent('#div_con').parent('#div_cha').remove(); x--;
                })
            });   
        </script>
    </body>
</html>