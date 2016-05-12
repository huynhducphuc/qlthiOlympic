<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/qlthiolympic/core/SessionManager.php';
	require_once 'services/TestService.php';
    SessionManager::init();
    $db = new TestService();

	include 'user-template-header.php';
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
					<h2>Chọn một lĩnh vực</h2>
					<div class="clearfix"></div>
				</div>
				<!-- Message -->
				<div class="col-md-6 col-sm-6 col-xs-6" style="float: none; margin: 0 auto;">
					
				</div>
				<!-- /Message -->
				<div class="x_content">
					<!-- Put your code here -->
					<div class="row">
						<?php
							$dsLinhVuc = $db->getAllTopics();
							foreach($dsLinhVuc as $lv) {
								$tenlinhvuc = $lv['ten'];
								$malinhvuc = $lv['linhvuc_id'];
								$motalinhvuc = $lv['mota'];
						?>
							<div class="col-md-55">
								<form action="choosealevel.php" method="post">
									<input type="hidden" name="linhvuc_id" value="<?php echo $malinhvuc; ?>" ></input>
									<input type="hidden" name="tenlinhvuc" value="<?php echo $tenlinhvuc; ?>" ></input>
				                    <div class="panel panel-default">
				                      	<div class="panel-heading">
				                      		<b class="title"><?php echo $lv['ten']; ?></b>	
				                      	</div>
				                      	<div class="panel-body">
				                      		<div class="">
				                      			<p><?php echo $lv['mota']; ?></p>
				                      		</div>
				                      	</div>
				                      	<div class="panel-footer">
				                      		<button class="btn btn-primary form-control">Vào thi</button>
				                      	</div>
				                    </div>
				                </form>
		                    </div>
						<?php
							}
						?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<!-- /main-content -->

<?php
	include_once 'user-template-footer.php';
?>
