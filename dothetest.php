<?php
	ob_start();
	require_once $_SERVER['DOCUMENT_ROOT'].'/qlthiolympic/core/SessionManager.php';
	require_once 'services/TestService.php';
    SessionManager::init();
    $db = new TestService();

	include 'user-template-header.php';

	if (isset($_POST['btnSubmit']) && isset($_POST['malinhvuc']) && isset($_POST['socau'])) {
		// get parameters
		$malinhvuc = $_REQUEST['malinhvuc'];
		$socau = $_REQUEST['socau'];
		$user = SessionManager::get('user');

		// create a test
		//// insert a test
		$testId = $db->insertTest($user['nguoidung_id'], $malinhvuc);

		//// insert the test's questions
		////// get random questions
		$randomQuestions = $db->getQuestions($malinhvuc, $socau);
		////// insert
		foreach ($randomQuestions as $q) {
		 	// insert to database
		 	$db->insertTestQuestion($testId, $q['cau_id']);
		 } 

		// get the test's questions
		$testQuestions = $db->getTestQuestions($testId);

		// unset $_POST
		unset($_POST);
?>
<!-- main-content -->
<div class="">
	<div class="page-title" style="margin-bottom: 50px">
		<div class="title_left">
			<h3>Thi</h3>
		</div>

		<div class="title_right">
			
		</div>
	</div>
	<div class="clearfix"></div>

	<div class="row">

		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2 id="timer"></h2>
					<div class="clearfix"></div>
				</div>
				<!-- Message -->
				<div class="col-md-6 col-sm-6 col-xs-6" style="float: none; margin: 0 auto;">
					
				</div>
				<!-- /Message -->
				<div class="x_content">
					<!-- Put your code here -->
					<div class="">
						<form id="frm-dothetest" class="" action="showresult.php" method="post">
							<input type="hidden" id="maBaiLam" name="maBaiLam" value="<?php echo $testId; ?>"></input>
							<input type="hidden" id="duration" value="<?php echo $socau;?>"></input>
							<ol>
								<?php
									$count = 0;
									$radioname = 'question-';
									foreach ($testQuestions as $testQuestion) {
										$count++;
								?>
                				<li>
                					<h3><?php echo $testQuestion['noidung'] ?></h3>
                    				<?php
                    					$dsDapAn = $db->getQuestionAnswers($testQuestion['cau_id']);
                    					foreach ($dsDapAn as $da) {
                    				?>
					                    <div>
					                    	<input type="hidden" id="maCau" value="<?php echo $testQuestion['cau_id']; ?>"></input>
					                    	<input type="hidden" id="maDapAn" value="<?php echo $da['cau_dapan_id'] ?>"></input>
					                        <input type="radio" name="<?php echo $radioname.$count?>" id="radDapAn" value="A" />
					                        <label for="<?php echo $radioname.$count?>">
					                        	<?php echo $da['noidungdapan']; ?>
					                        </label>
					                    </div>
				                    <?php
				                    	}
				                    ?>
                				</li>
                				<?php
                					}
								?>
                			</ol>
                			<input type="submit" class="btn btn-primary" value="Nộp"></input>
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

<!-- update user's choice -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#frm-dothetest').on('click', '#radDapAn', function(e) {
			// get values
			var maBaiLam = $('#maBaiLam').val();
			var maCau = $(this).siblings('#maCau').val();
			var maDapAn = $(this).siblings('#maDapAn').val();

			// ajax
			if (maBaiLam == 0 || maCau == 0 || maDapAn == 0) {
            } else {
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.onreadystatechange = function() {
                    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                        console.log('Youve just updated:  !BaiLam:' + maBaiLam + ';Cau' + maCau + ";DapAn" + maDapAn + ';ket qua: ' + xmlHttp.responseText);
                    }
                };
                xmlHttp.open("POST", "./controllers/UpdateUserChoice.php", true);
				xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xmlHttp.send("maBaiLam=" + maBaiLam + "&maCau=" + maCau + "&dapAnNguoiDung=" + maDapAn);
            }
		});
	});
</script>
<!-- /update user's choice -->

<!-- timer -->
<script type="text/javascript">
	var timer = document.getElementById('timer');
	var minutes = document.getElementById('duration').value;
	var seconds_left = minutes * 60;
	setInterval(function(){
		var minutes = parseInt(seconds_left / 60);
    	var seconds = parseInt(seconds_left % 60);

		timer.innerHTML = 'Thời gian: ' + minutes + ' Phút ' + seconds + ' Giây';
		seconds_left--;
		// submit form if no time left
		if (seconds_left == 0) {
			document.getElementById('frm-dothetest').submit();
		}
	}, 1000);
</script>
<!-- /timer -->

<?php
	include_once 'user-template-footer.php';
?>