<?php 
    $id = $_GET['id'];
    if(!is_numeric($id)){
        Header( "Location: danhsach_bailam.php" );
        exit;
    } 
    include('../config/connectdb.php');
    $sql = "SELECT bl.bailam_id, bl.dapannguoidung_id, c.noidung, c.cau_id FROM bailam_cau bl INNER JOIN cau AS c ON bl.cau_id = c.cau_id WHERE bailam_id=".$id;
    $sql_2 = "SELECT bl.bailam_id, bl.dapannguoidung_id, c.noidung, c.cau_id, da.noidungdapan, da.dapandung, da.cau_dapan_id FROM bailam_cau bl INNER JOIN cau AS c ON bl.cau_id = c.cau_id INNER JOIN cau_dapan AS da ON c.cau_id = da.cau_id WHERE bailam_id=".$id;
    $result = mysql_query($sql,$link);
    $result_2 = mysql_query($sql_2,$link);
    $num = mysql_num_rows($result);
    if($num<=0){
        Header( "Location: danhsach_bailam.php" );
        exit;
    }
    
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="author" content="DucPhuc" />
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>
			BLThiSinh
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
									Kết Quả Bài Làm 
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
									<div class="x_content">
										<!-- Put your code here -->
                                        <?php 
                                        include('../config/connectdb.php');
                                        $sql_detail = "SELECT bl.bailam_id, bl.thoigiannop, nd.ten, lv.ten FROM bailam bl INNER JOIN nguoidung AS nd ON bl.nguoidung_id = nd.nguoidung_id INNER JOIN linhvuc AS lv ON lv.linhvuc_id = bl.linhvuc_id WHERE bl.bailam_id=".$id;
                                        $result_detail = mysql_query($sql_detail,$link);
                                        $row_detail = mysql_fetch_array($result_detail);
                                        ?>
                                          <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 30px;">
                                            
                                            <ul class="stats-overview">
                                              <li>
                                                <span class="name"> Thí Sinh </span>
                                                <span class="value text-success" style="font-size: x-large;"><?php echo $row_detail[2];?></span>
                                              </li>
                                              <li>
                                                <span class="name"> Thời gian nộp </span>
                                                <span class="value text-success" style="font-size: x-large;"><?php echo $row_detail[1];?></span>
                                              </li>
                                              
                                              <li class="hidden-phone">
                                                <span class="name"> Lĩnh vực </span>
                                                <span class="value text-success" style="font-size: x-large;"><?php echo $row_detail[3];?></span>
                                              </li>
                                              
                                            </ul>
                                          </div>
                                          
										<?php 
                                            if($num>0){
                                                $causo = 0;
                                                $dapan = 0;
                                        ?>
                                        <section class="content invoice">
                                        <div class="row">
                                        <div class="col-xs-12 table">
										<table class="table table-striped projects">
											<thead>
												<tr>
                                                    <th>Nội Dung Câu Hỏi</th>
                                                    <th>Danh Sách Đáp Án</th>
                                                    <th>Đáp Án Đúng</th>
                                                    <th>Đáp Án Thí Sinh</th>
                                                    <th>Kết quả</th>
													<th></th>
												</tr>
											</thead>
											<tbody id="tbl-body">
        										<?php 
                                                    $ketqua = 3;
                                                    $dapan_dung = '';
                                                    $dapan_nguoidung = '';
                                                    $socaudung = 0;
                                                    $tongsocau = 0;
                                                    while($row = mysql_fetch_array($result)){
												        echo("<tr>");
                                                        echo("<td>".$row['noidung']."</td>" );
                                                        $result_2 = mysql_query($sql_2,$link);
                                                        echo("<td>");
                                                        $tongsocau = $tongsocau + 1;
                                                        while($row_2 = mysql_fetch_array($result_2)){ 
                                                            if($row['cau_id']==$row_2['cau_id']){
                                                                $dapan = $dapan + 1;
                                                                echo($dapan.". ".$row_2['noidungdapan']."<br/>");
                                                                if($row_2['dapandung']==1) $dapan_dung = $row_2['noidungdapan'];
                                                                if($row['dapannguoidung_id']==$row_2['cau_dapan_id']){
                                                                    $dapan_nguoidung = $row_2['noidungdapan'];
                                                                    if($row_2['dapandung']==1) {
                                                                        $ketqua = 1;
                                                                        $socaudung = $socaudung + 1;
                                                                    }   else $ketqua = 2;
                                                                }
                                                            }
                                                        }
                                                        $dapan = 0;
                                                        echo("</td>");
                                                        echo("<td>".$dapan_dung."</td>" );
                                                        echo("<td>".$dapan_nguoidung."</td>" );     
                                                        if($ketqua==1)
                                                            echo("<td><button class='btn btn-success btn-xs'>Đúng</button></td>");   
                                                        else if($ketqua==2) echo("<td><button class='btn btn-danger btn-xs'>Sai</button></td>");
                                                                else echo ("<td><button class='btn btn-danger btn-xs'>Chưa chọn</button></td>");
                                                        $ketqua = 3;
                                                    }
                                                ?>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><span style='font-size: x-large;'>Số câu đúng</span></td>
                                                    <td><?php echo "<span style='font-size: x-large;'>".$socaudung." / " .$tongsocau."</span>" ; ?></td>
                                                </tr>
											</tbody>
										</table>
                                        </div></div>
                                         </section>
										<?php 
                                            } 
                                            mysql_free_result($result);
                                            mysql_free_result($result_2);
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
                <!-- /page content -->
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

        <script src="bootstrap/js/custom.js"></script>
        

	</body>

</html>