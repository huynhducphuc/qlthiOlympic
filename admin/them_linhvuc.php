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
    <link href="bootstrap/css/icheck/flat/green.css" rel="stylesheet">
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
                    Lĩnh vực
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
                        Thêm lĩnh vực
                      </h2>
                      <div class="clearfix">
                      </div>
                    </div>
                    <!-- Message -->
                    <!-- /Message -->
                    <div class="x_content">
                      <!-- Put your code here -->
                      <form class="form-horizontal form-label-left" novalidate action="controller_them_linhvuc.php" method="post">
                        <div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"
								for="name">Tên <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="ten" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
									name="ten" placeholder=""
									required="required" type="text" />
							</div>
						</div>
                        <div class="item form-group">
                          	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Mô tả</label>
                          	<div class="col-md-6 col-sm-6 col-xs-12"	>
                            	<textarea rows="5" name="mota" class="form-control col-md-7 col-xs-12"></textarea>
                          	</div>
                    	</div>
                        <div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"
								for="name">Ảnh</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
									name="anh" placeholder=""
									type="text" />
							</div>
						</div>
                        <div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-3">
								<button id="send" type="submit" class="btn btn-success">Thêm</button>
								<a class="btn btn-default" href="danhsach_linhvuc.php">Hủy</a>
							</div>
						</div>
                      </form>
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