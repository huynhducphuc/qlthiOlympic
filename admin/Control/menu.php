<?php
    if(!session_start()) session_start(); 
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];   
    }else{
        Header( "Location: login.php" );
        exit;
    }
?>
<div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>QL Thi Olympic</span></a>
          </div>
          <div class="clearfix"></div>


          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="bootstrap/images/user.png" alt="..." class="img-circle profile_img"/>
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?php echo $username;?></h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>DPBH</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="#">Dashboard</a>
                    </li>
                    
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Lĩnh Vực <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="../admin/danhsach_linhvuc.php">Danh sách</a>
                    </li>
                    <li><a href="../admin/them_linhvuc.php">Thêm mới</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> Câu Hỏi <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="../admin/danhsach_cau.php">Danh sách</a>
                    </li>
                    <li><a href="../admin/them_cau.php">Thêm mới</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Bài Làm <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                    <li><a href="../admin/danhsach_bailam.php">Danh sách</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Thí Sinh <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="../admin/danhsach_nguoidung.php">Danh sách</a>
                    </li>
                    <li><a href="../admin/them_nguoidung.php">Thêm mới</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="menu_section">
				<h3>Cài đặt</h3>
				<ul class="nav side-menu">
					<li>
						<a>
							<i class="fa fa-bug"></i> Cá nhân 
							<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu" style="display: none">
							<li><a href="#">Thông tin cá nhân</a></li>
							<li><a href="logout.php">Đăng xuất</a></li>
						</ul>
					</li>
				</ul>
			</div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
    			<a data-toggle="tooltip" data-placement="top" title="Trang chủ">
    				<span class="fa fa-home" aria-hidden="true"></span>
    			</a>
    			<a data-toggle="tooltip" data-placement="top" title="Trang cá nhân"> 
    				<span class="fa fa-user	" aria-hidden="true"></span>
    			</a>
    			<a data-toggle="tooltip" data-placement="top" title="Cài đặt">
    				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    			</a> 
    			<a href="logout.php" data-toggle="tooltip" data-placement="top" title="Đăng xuất">
    				<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    			</a>
    		</div>
          <!-- /menu footer buttons -->
        </div>
      </div>