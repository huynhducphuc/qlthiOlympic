<?php
	require_once './core/Url.php';
	require_once Url::$ROOT_PATH.'/core/SessionManager.php';
	SessionManager::init();
	if (!SessionManager::isLoggedIn()) {
		$logInPath = Url::to("/login.php");
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>User</title>
	<link rel="shortcut icon" href="./resources/images/favicon.ico">
	<!-- Bootstrap core CSS -->
	
	<link href="resources/production/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="resources/production/fonts/css/font-awesome.min.css" rel="stylesheet">
	<link href="resources/production/css/animate.min.css" rel="stylesheet">
	
	<!-- Custom styling plus plugins -->
	<link href="resources/production/css/custom.css" rel="stylesheet">
	<link href="resources/production/css/icheck/flat/green.css" rel="stylesheet">
	
	
	<script src="resources/production/js/jquery.min.js"></script>
</head>
<body class="nav-md">

	<div class="container body">


		<div class="main_container">

			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">

					<div class="navbar nav_title" style="border: 0;">
						<a href="chooseatest.php" class="site_title"><i class="fa fa-plus-square"></i>
							<span>OlympicN</span></a>
					</div>
					<div class="clearfix"></div>

					<!-- menu prile quick info -->
					<div class="profile">
						<div class="profile_pic">
							<img src="resources/images/avatar.png" alt="..."
								class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Chào,</span>
							<h2>
								<?php 
									$user = SessionManager::get('user');
									echo $user['tendangnhap'];
								?>
							</h2>
						</div>
					</div>
					<!-- /menu prile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu"
						class="main_menu_side hidden-print main_menu">

						<div class="menu_section">
							<h3>&nbsp;</h3>
							<ul class="nav side-menu">
								<li><a href="chooseatest.php"><i class="fa fa-home"></i> Vào thi</a></li>
								<li><a href="result.php"><i class="fa fa-home"></i> Kết quả</a></li>
								<li><a href="#xephang"><i class="fa fa-home"></i> Xếp hạng</a></li>
								<li><a href="#thongthin"><i class="fa fa-home"></i> Thông tin cá nhân</a></li>
								<li><a href="./controllers/UserLogOut.php"><i class="fa fa-home"></i> Đăng xuất</a></li>
							</ul>
						</div>

					</div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
					<div class="sidebar-footer hidden-small">
						<a href="chooseatest.php" data-toggle="tooltip" data-placement="top" title="Trang chủ">
							<span class="fa fa-home" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Trang cá nhân"> 
							<span class="fa fa-user	" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Cài đặt">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</a> 
						<a data-toggle="tooltip" data-placement="top" title="Đăng xuất">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
						</a>
					</div>
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">

				<div class="nav_menu">
					<nav class="" role="navigation">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>

					<ul class="nav navbar-nav navbar-right">
						<li class=""><a href="javascript:;"
							class="user-profile dropdown-toggle" data-toggle="dropdown"
							aria-expanded="false"> <img src="resources/images/avatar.png" alt="">OlympicN<span class=" fa fa-angle-down"></span>
						</a>
							<ul
								class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
								<li><a href="javascript:;"><i class="fa fa-user pull-right"></i> Thông tin cá nhân</a></li>
								<li><a href="javascript:;"><i class="fa fa-cog pull-right"></i> <span>Cài đặt</span> </a></li>
								<li><a href="javascript:;"><i class="fa fa-question-circle pull-right"></i>Trợ giúp</a></li>
								<li><a href="controllers/UserLogOut.php"><i class="fa fa-sign-out pull-right"></i> Đăng xuất</a></li>
							</ul></li>


					</ul>
					</nav>
				</div>

			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<!-- main content -->
				

				