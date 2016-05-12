<?php
	ob_start();
	require_once 'services/ResultService.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/qlthiolympic/core/SessionManager.php';
    SessionManager::init();
    $db = new ResultService();

	include 'user-template-header.php';

	if (isset($_POST['maBaiLam'])) {
		// get parameters
		$maBaiLam = $_POST['maBaiLam'];
		$user = SessionManager::get('user');

		// get the result
		$result = $db->getResult($user['nguoidung_id'], $maBaiLam);

		$passedans = $result['caudung'] * 100 / $result['tongcau'];
		$failedans = $result['causai'] * 100 / $result['tongcau'];
		$total = $result['tongcau'];
?>
<!-- main-content -->
<style type="text/css">
	.progress {
		height: 30px;
	}

	.progress-label {
	    float: left;
	    margin-right: 1em;
	}
</style>
<div class="">
	<div class="page-title" style="margin-bottom: 50px">
		<div class="title_left">
			<h3>Kết quả</h3>
		</div>

		<div class="title_right">
			
		</div>
	</div>
	<div class="clearfix"></div>

	<div class="row">

		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel" style="height: 600px;">
				<div class="x_title">
					<h2>Kết quả bài làm</h2>
					<div class="clearfix"></div>
				</div>
				<!-- Message -->
				<div class="col-md-6 col-sm-6 col-xs-6" style="float: none; margin: 0 auto;">
					
				</div>
				<!-- /Message -->
				<div class="x_content">
					<!-- Put your code here -->
					<div class="">
		                <p>
		                    <h2 class="progress-label col-md-2">
		                    	<?php echo "Câu đúng (".$result['caudung']."/".$total.")"; ?>
		                    </h2>
		                    <div class="progress">
		                    	<div class="progress-bar progress-bar-striped progress-bar-success" data-transitiongoal="<?php echo $passedans; ?>">
		                    	</div>
		                    </div>
		                </p>
		                <p>
							<h2 class="progress-label col-md-2">
								<?php echo "Câu sai (".$result['causai']."/".$total.")"; ?>
							</h2>
							<div class="progress">
		                    	<div class="progress-bar progress-bar-striped progress-bar-danger" data-transitiongoal="<?php echo $failedans; ?>">
		                    	</div>
		                    </div>
		                </p>
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