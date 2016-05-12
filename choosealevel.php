<?php
	ob_start();
	require_once $_SERVER['DOCUMENT_ROOT'].'/qlthiolympic/core/SessionManager.php';
	require_once 'services/TestService.php';
    SessionManager::init();
    $db = new TestService();

	include 'user-template-header.php';

	if (isset($_REQUEST['linhvuc_id']) && isset($_REQUEST['tenlinhvuc'])) {
		$malinhvuc = $_REQUEST['linhvuc_id'];
		$tenlinhvuc = $_REQUEST['tenlinhvuc'];
?>
<!-- main-content -->
<div class="">
	<div class="page-title" style="margin-bottom: 50px">
		<div class="title_left">
			<h3>Vào thi</h3>
		</div>

		<div class="title_right">
			
		</div>
	</div>
	<div class="clearfix"></div>

	<div class="row">

		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel" style="height: 600px;">
				<div class="x_title">
					<h2>Chọn mức độ</h2>
					<div class="clearfix"></div>
				</div>
				<!-- Message -->
				<div class="col-md-6 col-sm-6 col-xs-6" style="float: none; margin: 0 auto;">
					
				</div>
				<!-- /Message -->
				<div class="x_content">
					<!-- Put your code here -->
					<div class="">
						<form action="dothetest.php" method="post" class="form-horizontal form-label-left">
							<input type="hidden" name="malinhvuc" value="<?php echo $malinhvuc; ?>"></input>
							<div class="item form-group">
	                      		<label class="control-label col-md-3 col-sm-3 col-xs-12">Lĩnh vực</label>
	                      		<div class="col-md-6 col-sm-6 col-xs-12">
			                        <h4><?php echo $tenlinhvuc; ?></h4>
		                      	</div>
	                    	</div>
							<div class="item form-group">
	                      		<label class="control-label col-md-3 col-sm-3 col-xs-12">Mức độ</label>
	                      		<div class="col-md-6 col-sm-6 col-xs-12">
			                        <select class="form-control">
			                          <option selected="selected">Dễ</option>
			                          <option>Vừa</option>
			                          <option>Khó</option>
			                          <option>Cực khó</option>
			                          <option>Siêu khó</option>
			                        </select>
		                      	</div>
	                    	</div>
	                    	<div class="item form-group">
	                      		<label class="control-label col-md-3 col-sm-3 col-xs-12">Số câu</label>
	                      		<div class="col-md-6 col-sm-6 col-xs-12">
			                        <select name="socau" class="form-control">
			                          <option selected="selected">5</option>
			                          <option>10</option>
			                          <option>20</option>
			                        </select>
		                      	</div>
	                    	</div>
		                    <div class="form-group">
		                      <div class="col-md-6 col-md-offset-3">
		                      	<input type="submit" name="btnSubmit" class="btn btn-success" value="Vào thi"></input>
		                        <a href="chooseatest.php" class="btn btn-primary">Quay lại</a>
		                      </div>
		                    </div>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<?php
	} else {
		header("location: chooseatest.php");
	}
?>
<!-- /main-content -->

<?php
	include_once 'user-template-footer.php';
?>