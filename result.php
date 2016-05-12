<!-- header -->
<?php
	require_once 'services/ResultService.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/qlthiolympic/core/SessionManager.php';
    SessionManager::init();
    $db = new ResultService();

	include 'user-template-header.php';
?>
<!-- /header -->
<!-- main-content -->
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
			<div class="x_panel">
				<div class="x_title">
					<h2>Kết quả thi</h2>
					<div class="clearfix"></div>
				</div>
				<!-- Message -->
				<div class="col-md-6 col-sm-6 col-xs-6" style="float: none; margin: 0 auto;">
					
				</div>
				<!-- /Message -->
				<div class="x_content">
					<!-- Put your code here -->
					<table class="table table-striped responsive-utilities jambo_table bulk_action">
						<thead>
							<tr class="headings">
								<th class="column-title">#Ma bai lam </th>
								<th class="column-title">Linh vuc </th>
								<th class="column-title">So cau dung </th>
								<th class="column-title">So cau sai </th>
								<th class="column-title">Tong so cau </th>
							</tr>
						</thead>
						<tbody>
							<?php
								$user = SessionManager::get('user');
								$dsKetQua = $db->getAllResults($user['nguoidung_id']);
								foreach ($dsKetQua as $kq) {
							?>
							<tr>
								<td><?php echo $kq['bailam_id']; ?></td>
								<td><?php echo $kq['tenlinhvuc']; ?></td>
								<td><?php echo $kq['caudung']; ?></td>
								<td><?php echo $kq['causai']; ?></td>
								<td><?php echo $kq['tongcau']; ?></td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>
					
				</div>
				
			</div>
		</div>
	</div>
</div>
<!-- /main-content -->

<!-- footer -->
<?php
	include_once 'user-template-footer.php';
?>
<!-- /footer -->