<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/qlthiolympic/core/SessionManager.php';
    SessionManager::init();
	include 'user-template-header.php';
?>
<!-- main-content -->
<div class="">
	<div class="page-title" style="margin-bottom: 50px">
		<div class="title_left">
			<h3>Blank Page</h3>
		</div>

		<div class="title_right">
			
		</div>
	</div>
	<div class="clearfix"></div>

	<div class="row">

		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel" style="height: 600px;">
				<div class="x_title">
					<h2>Blank Page</h2>
					<div class="clearfix"></div>
				</div>
				<!-- Message -->
				<div class="col-md-6 col-sm-6 col-xs-6" style="float: none; margin: 0 auto;">
					
				</div>
				<!-- /Message -->
				<div class="x_content">
					<!-- Put your code here -->
					<h1>Put your code here!</h1>
					
				</div>
				
			</div>
		</div>
	</div>
</div>
<!-- /main-content -->

<?php
	include_once 'user-template-footer.php';
?>
