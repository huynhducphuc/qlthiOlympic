<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="author" content="DucPhuc" />
		<title>
			DSLinhVuc
		</title>
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>
			DSLinhVuc
		</title>
		<!-- Bootstrap core CSS -->

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        
        <link href="bootstrap/fonts/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="bootstrap/css/animate.min.css" rel="stylesheet"/>
        
        <!-- Custom styling plus plugins -->
        <link href="bootstrap/css/custom.css" rel="stylesheet" />
        <link href="bootstrap/css/icheck/flat/green.css" rel="stylesheet" />
        
        <link href="bootstrap/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="bootstrap/js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="bootstrap/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="bootstrap/js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="bootstrap/js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <script src="bootstrap/js/jquery.min.js"></script>
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
									Danh sách câu hỏi
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
										<a class="btn btn-success btn-sm" href="them_cau.php"><i class="fa fa-plus"></i> Thêm mới</a>
										<div class="clearfix">
										</div>
									</div>
									<!-- Message -->
									<div class="col-md-6 col-sm-6 col-xs-6" style="float: none; margin: 0 auto;">
										<?php if (isset($msg) !=null) {?> 
                                            <div class="alert alert-success alert-dismissible fade in" role="alert">
        					                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        				                    	<p><strong><?php echo $msg?></strong></p>
                                            </div>
								        <?php } ?>
									</div>
									<!-- /Message -->
									<div class="x_content">
										<!-- Put your code here -->
										<?php 
                                        include('../config/connectdb.php');
                                        $sql = "SELECT c.cau_id, c.linhvuc_id, c.noidung, lv.ten FROM cau c INNER JOIN linhvuc lv ON c.linhvuc_id = lv.linhvuc_id";
                                        $result = mysql_query($sql,$link);
                                        $num = mysql_num_rows($result);          
                                        if($num>0){
                                        ?>
										<table id="datatable" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>
														Mã
													</th>
													<th>
														Lĩnh vực
													</th>
                                                    <th>
														Nội dung
													</th>
													<th>
													</th>
												</tr>
											</thead>
											<tbody id="tbl-body">
												<?php 
                                                    while($row = mysql_fetch_array($result)){
                                                        echo("<tr>");
                                                        echo("<td>".$row['cau_id']."</td>" );
                                                        echo("<td>".$row['ten']."</td>" );
                                                        echo("<td>".$row['noidung']."</td>" );
                                                ?>
													<td>
                                                        <input type="hidden" id="hidden-maxoa" value="<?php echo $row['cau_id'];  ?>"/>
														<a class="btn btn-primary btn-xs" href='capnhat_cau.php?id=<?php echo $row['cau_id'];  ?>'>Xem</a>
														<a class="btn btn-danger btn-xs" id="btn-xoa" href='' data-toggle="modal" data-target=".bs-example-modal-sm">Xóa</a>
                                                    </td>
													<?php } mysql_free_result($result); mysql_close($link); ?>
											</tbody>
										</table>
										<?php } ?>
									</div>
									<!-- modals -->
									<div class="x_content">
										<!-- Small modal -->
										<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> -->
										<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog modal-sm">
												<div class="modal-content">
                                                    <form id="form-xoa" action="controller_xoa_cau.php" method="post">
                                                        <input id="modal-hidden-maxoa" type="hidden" value="" name="id" />
    													<div class="modal-header">
    														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    															<span aria-hidden="true">
    																×
    															</span>
    														</button>
    														<h4 class="modal-title" id="myModalLabel2">
    															Thông báo
    														</h4>
    													</div>
    													<div class="modal-body">
    														<h4>
    															Bạn có chắc muốn xóa thông tin này?
    														</h4>
    													</div>
    													<div class="modal-header">
    														<div style="float:right">
    															<button type="submit" id="btnYes" class="btn btn-sm btn-danger">
    																Xóa
    															</button>
    															<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">
    																Ðóng
    															</button>
    														</div>
    													</div>
                                                    </form>
												</div>
											</div>
										</div>
									</div>
                                    <!-- /modals -->
                                    
								</div>
							</div>
						</div>
					</div>
                    <!-- footer content -->
					<?php include ( 'Control/footer.php'); ?>
                    <!-- /footer content -->
				</div>
                <!-- /page content -->
			</div>
		</div>
        
        <!--lay ma de xoa -->
		<script type="text/javascript">
			$(document).ready(function() {
				// lay ma thong bao	
				$('#tbl-body').on('click', 'a#btn-xoa', function() {
					// lay ma dot dang ky
					var maxoa = $(this).siblings('input#hidden-maxoa').val();
					// set ma vao modal
					$('#modal-hidden-maxoa').val(maxoa);
				});
			});
		</script>
        
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

        <script src="bootstrap/js/custom.js"></script>
        
		<!-- Datatables-->
		<script src="bootstrap/js/datatables/jquery.dataTables.min.js">
		</script>
		<script src="bootstrap/js/datatables/dataTables.bootstrap.js">
		</script>
		<script src="bootstrap/js/datatables/dataTables.buttons.min.js">
		</script>
		<script src="bootstrap/js/datatables/buttons.bootstrap.min.js">
		</script>
		<script src="bootstrap/js/datatables/jszip.min.js">
		</script>
		<script src="bootstrap/js/datatables/pdfmake.min.js">
		</script>
		<script src="bootstrap/js/datatables/vfs_fonts.js">
		</script>
		<script src="bootstrap/js/datatables/buttons.html5.min.js">
		</script>
		<script src="bootstrap/js/datatables/buttons.print.min.js">
		</script>
		<script src="bootstrap/js/datatables/dataTables.fixedHeader.min.js">
		</script>
		<script src="bootstrap/js/datatables/dataTables.keyTable.min.js">
		</script>
		<script src="bootstrap/js/datatables/dataTables.responsive.min.js">
		</script>
		<script src="bootstrap/js/datatables/responsive.bootstrap.min.js">
		</script>
		<script src="bootstrap/js/datatables/dataTables.scroller.min.js">
		</script>
		<script>
			var handleDataTableButtons = function() {
				"use strict";
				0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
					dom: "Bfrtip",
					buttons: [{
						extend: "copy",
						className: "btn-sm"
					},
					{
						extend: "csv",
						className: "btn-sm"
					},
					{
						extend: "excel",
						className: "btn-sm"
					},
					{
						extend: "pdf",
						className: "btn-sm"
					},
					{
						extend: "print",
						className: "btn-sm"
					}],
					responsive: !0
				})
			},
				TableManageButtons = function() {
					"use strict";
					return {
						init: function() {
							handleDataTableButtons()
						}
					}
				}();
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#datatable').dataTable({
					responsive: true,
					language: {
						"sProcessing" : "Đang xử lý...",
					"sLengthMenu" : "Xem _MENU_ mục",
					"sZeroRecords" : "Không tìm thấy dòng nào phù hợp",
					"sInfo" : "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
					"sInfoEmpty" : "Đang xem 0 đến 0 trong tổng số 0 mục",
					"sInfoFiltered" : "(được lọc từ _MAX_ mục)",
					"sInfoPostFix" : "",
					"sSearch" : "Tìm:",
					"sUrl" : "",
					"oPaginate" : {
						"sFirst" : "Đầu",
						"sPrevious" : "Trước",
						"sNext" : "Tiếp",
						"sLast" : "Cuối"
						}
					}
				});
			});
			TableManageButtons.init();
		</script>
	</body>

</html>