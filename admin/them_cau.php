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
      ThemLinhVuc
    </title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="bootstrap/css/animate.min.css" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="bootstrap/css/custom.css" rel="stylesheet">
    <link href="bootstrap/css/icheck/flat/green.css" rel="stylesheet" />
    <script src="bootstrap/js/jquery.min.js">
    </script>
    <script type="text/javascript" src="bootstrap/js/jquery-2.0.0.min.js">
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
                    Câu hỏi
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
                        Thêm câu hỏi
                      </h2>
                      <div class="clearfix">
                      </div>
                    </div>
                    <!-- Message -->
                    <!-- /Message -->
                    <div class="x_content">
                      <!-- Put your code here -->
                      
                        <?php 
                            include('../config/connectdb.php');
                            $sql = "SELECT * FROM linhvuc";
                            $result = mysql_query($sql,$link);
                            $num = mysql_num_rows($result);          
                            if($num>0){
                        ?>
                      <form class="form-horizontal form-label-left" novalidate action="controller_them_cau.php" method="post">
                        <div class="item form-group">
	                      	<label class="control-label col-md-3 col-sm-3 col-xs-12">Lĩnh vực<span class="required">*</span></label>
	                      	<div class="col-md-6 col-sm-6 col-xs-12">
	                        	<select class="form-control" name="linhvuc_id">
                                    <?php while($row = mysql_fetch_array($result)){?>
                                        <option value="<?php echo $row['linhvuc_id'] ;?>"><?php echo $row['ten'] ;?></option>
                                    <?php }?>
	                        	</select>
	                      	</div>
                      	</div>
						<div class="item form-group">
                          	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Nội dung<span class="required">*</span> </label>
                          	<div class="col-md-6 col-sm-6 col-xs-12"	>
                            	<textarea rows="5" name="noidung" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                          	</div>
                    	</div>
                        
                        <div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"
								for="name">Đáp án đúng <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
									name="dapan_dung" type="text" required="required"/>
							</div>
						</div>
                        
                        <div class="phuc_input_fields_wrap">
                            <div class="item form-group">
    							<label class="control-label col-md-3 col-sm-3 col-xs-12"
    								for="name">Đáp án sai <span class="required">*</span></label>
    							<div class="col-md-6 col-sm-6 col-xs-12">
    								<input class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
    									name="dapan_sai[]" type="text" required="required" />
    							</div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"></label>
    						</div>
                        </div>
                        
                        
                        
                        
                        <div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"
								for="name"></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<button class="phuc_add_field_button btn btn-default">+</button>
							</div>
						</div>
                        
                        
                        
                        
                        <div class="ln_solid"></div>
                        
   	                    <div class="form-group">
						  <div class="col-md-6 col-md-offset-3">
								<button id="send" type="submit" class="btn btn-success">Thêm</button>
								<a class="btn btn-default" href="danhsach_cau.php">Hủy</a>
						  </div>
				        </div>    
                      </form>
                      <?php 
                        mysql_free_result($result);
                        mysql_close($link);
                        }else echo "<p style='color:red'>Tạo lĩnh vực trước!</p>"; 
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
                    $(wrapper).append('<div style="margin-bottom: 0px;margin-bottom: 4px;" class="item form-group" id="div_co"><label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"></label><div class="col-md-6 col-sm-6 col-xs-12" id="div_noi"><div class="input-group" style="margin-bottom: 0px;" id="div_cha"><input class="form-control" name="dapan_sai[]" type="text" required="required" /><span class="input-group-btn" id="div_con"><a href="#" class="phuc_remove_field btn btn-danger">X</a></span></div></div><label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"></label></div>'); //add input box
                }
            });
            
            $(wrapper).on("click",".phuc_remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('#div_con').parent('#div_cha').parent('#div_noi').parent('#div_co').remove(); x--;
            })
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