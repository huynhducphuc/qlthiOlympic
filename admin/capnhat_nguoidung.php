<?php 
    $id = $_GET['id'];
    if(!is_numeric($id)){
        Header( "Location: danhsach_nguoidung.php" );
        exit;
    } 
    include('../config/connectdb.php');
    $sql = "SELECT * FROM nguoidung WHERE nguoidung_id = ".$id;
    $result = mysql_query($sql,$link);
    $num = mysql_num_rows($result);
    if($num<=0){
        Header( "Location: danhsach_nguoidung.php" );
        exit;
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="author" content="DucPhuc" />
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>
      ThemThiSinh
    </title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="bootstrap/fonts/css/font-awesome.min.css" rel="stylesheet" />
    <link href="bootstrap/css/animate.min.css" rel="stylesheet" />
    <!-- Custom styling plus plugins -->
    <link href="bootstrap/css/custom.css" rel="stylesheet" />
    <link href="bootstrap/css/icheck/flat/green.css" rel="stylesheet" />
    <link rel="stylesheet" href="bootstrap-datepicker/css/datepicker.css" />
    <script src="bootstrap/js/jquery.min.js">
    </script>
  </head>
  
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include ( 'Control/menu.php'); include ( 'Control/top.php'); ?>
          <div class="right_col" role="main">
            <!-- main-->
            <div class="">
              <div class="page-title" style="margin-bottom: 50px">
                <div class="title_left">
                  <h3>
                    Thí Sinh
                  </h3>
                </div>
                <div class="title_right">
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>
                        Cập nhật thông tin thí sinh
                      </h2>
                      <div class="clearfix">
                      </div>
                    </div>
                    <!-- Message -->
                    <!-- /Message -->
                    <div class="x_content">
                      <!-- Put your code here -->
                      <?php 
                            if($num>0){
                                $row = mysql_fetch_array($result);
                                $date = date_create($row['ngaysinh']);
                        ?>
                      <form class="form-horizontal form-label-left" novalidate action="controller_capnhat_nguoidung.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['nguoidung_id'];  ?>"/>
                        <div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"
								for="name">Mã </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input class="form-control col-md-7 col-xs-12" value="<?php echo $row['nguoidung_id'];  ?>"
									data-validate-length-range="6" type="text" disabled="disabled" />
							</div>
						</div>
                        
                        <div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"
								for="name">Tên <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="ten" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
									name="ten" placeholder="" value="<?php echo $row['ten']; ?>"
									required="required" type="text" />
							</div>
						</div>
                        
                        <div class="form-group">
        					<label class="control-label col-md-3 col-sm-3 col-xs-12">Ngày Sinh</label>
        					<div class="col-md-6 col-sm-6 col-xs-12">
        						<input id="datepicker" readonly class="form-control" type="text" name="ngaysinh" value="<?php echo date_format($date,'d/m/Y'); ?>" class="input-medium" />
        					</div>
        				</div>
                        
                        <div class="item form-group">
	                      	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Địa chỉ <span class="required">*</span></label>
	                      	<div class="col-md-6 col-sm-6 col-xs-12"	>
	                        	<textarea required="required" name="diachi" class="form-control col-md-7 col-xs-12"><?php echo $row['diachi']; ?></textarea>
	                      	</div>
                    	</div>
                        <div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"
								for="name">Tên Đăng Nhập <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
									name="tendangnhap" placeholder="" value="<?php echo $row['tendangnhap']; ?>"
									required="required" type="text" />
							</div>
						</div>
                        <div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"
								for="name">Mật Khẩu <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
									name="matkhau" placeholder="" value="<?php echo $row['matkhau']; ?>"
									required="required" type="text" />
							</div>
						</div>
                        <div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-3">
								<button id="send" type="submit" class="btn btn-success">Thêm</button>
								<a class="btn btn-default" href="danhsach_nguoidung.php">Hủy</a>
							</div>
						</div>
                      </form>
                      <?php }
                        mysql_free_result($result);
                        mysql_close($link);
                    ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- footer content -->
            <?php include ( 'Control/footer.php'); ?>
              <!-- /footer content -->
          </div>
      </div>
    </div>
    <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
    </div>
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!-- bootstrap progress js -->
    <script src="bootstrap/js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="bootstrap/js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="bootstrap/js/icheck/icheck.min.js"></script>
    <!-- pace -->
    <script src="bootstrap/js/pace/pace.min.js"></script>
    <script src="bootstrap/js/custom.js"></script>
    <!-- form validation -->
    <script src="bootstrap/js/validator/validator.js"></script>
    
    <!-- Datetime picker js  -->
	<script type="text/javascript" src="bootstrap-datepicker/js/bootstrap-datepicker.js" ></script>
	
	<script type="text/javascript">
		$('#datepicker').datepicker({
			format: 'dd/mm/yyyy',
		    minViewMode: "days"
	    });
	</script>
        
    <script>
      // initialize the validator function
      validator.message['date'] = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form').on('blur', 'input[required], input.optional, select.required', validator.checkField).on('change', 'select.required', validator.checkField).on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      // bind the validation to the form submit event
      //$('#send').click('submit');//.prop('disabled', true);

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;
        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit) this.submit();
        return false;
      });

      /* FOR DEMO ONLY */
      $('#vfields').change(function() {
        $('form').toggleClass('mode2');
      }).prop('checked', false);

      $('#alerts').change(function() {
        validator.defaults.alerts = (this.checked) ? false : true;
        if (this.checked) $('form .alert').remove();
      }).prop('checked', false);
    </script>
  </body>

</html>