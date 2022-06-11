<?php
session_start();
$lang_flg = isset($_SESSION['lang_flg']) ? $_SESSION['lang_flg'] : 'ko';
$dir_path = '';
$menu_flg = '';
require_once("dbconfig.php");
$sql = "
	SELECT BB_NO
		, CONCAT(LEFT(BB_TITLE, 14), '...') AS BB_TITLE
		, BB_TITLE AS BB_TITLE_ALL
		, BB_MESSAGE
		, CONCAT(SUBSTR(BB_WRT_DT, 1, 4), '-', SUBSTR(BB_WRT_DT, 5, 2), '-', SUBSTR(BB_WRT_DT, 7, 2)) AS BB_WRT_DT
	FROM TB_BOARD_BB010
	ORDER BY BB_NO DESC LIMIT 4";
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=debice-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=3.0"/>
	<title>마닐라아카데미</title>
	<!-- CSS -->
	<link rel="stylesheet" href="<?php print $dir_path;?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php print $dir_path;?>css/font-awesome.css">
	<link rel="stylesheet" href="<?php print $dir_path;?>css/common.css">
	<link rel="stylesheet" href="<?php print $dir_path;?>css/common.main.css">
	
	<!-- JS -->
	<script src="<?php print $dir_path;?>js/jquery-3.2.1.min.js"></script>
	<script src="<?php print $dir_path;?>js/bootstrap.min.js"></script>
	<script src="<?php print $dir_path;?>js/common.js"></script>
	<script src="<?php print $dir_path;?>js/language.pack.js"></script>
	<script>
		function goBodyPopup(obj) {
			var pId = "#myModal"+obj;
			$(pId).modal('toggle'); //Modal Pop-up Call..
		}
		function pageInit() {
			$('#notice1Modal').modal('toggle'); //Modal Pop-up Call..
			$('#notice4Modal').modal('toggle'); //Modal Pop-up Call..
			$('#noticeModal').modal('toggle'); //Modal Pop-up Call..
			//$('#notice2Modal').modal('toggle'); //Modal Pop-up Call..
			$('#notice3Modal').modal('toggle'); //Modal Pop-up Call..		
		}
	</script>
</head>

<body onload="pageInit();">
	<!--header 공통부분-->
	<header>
	<!--top_header 로그인, 가입, 로고등 있는 탑해더-->
		<?php include("header_menu.php"); ?>
	</header>
	<!--// header 공통부분-->
	
	<!-- 슬라이드 -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators - 슬라이드 이미지 만큼 있어야됨 -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
		</ol>
		<!-- //Indicators - 슬라이드 이미지 만큼 있어야됨 -->
		
		<!-- Indicators - 슬라이드 이미지여기서 변경 -->
		<div class="carousel-inner">
			<div class="item active"> <!-- 마닐라아카데미 전경 -->
				<img src="<?php print $dir_path;?>images/slide_1.jpg" style="width:100%;" class="pc">
				<img src="<?php print $dir_path;?>images/mb_slide_1.jpg" style="width:100%;" class="mb">
			</div>
			<div class="item"> <!-- 마닐라아카데미 유치부아이들의 노래하고 있는 모습 -->
				<img src="<?php print $dir_path;?>images/slide_2.jpg" style="width:100%;" class="pc">
				<img src="<?php print $dir_path;?>images/mb_slide_2.jpg" style="width:100%;" class="mb">
			</div>
			<div class="item"> <!-- 마닐라아카데미 학생들 단체사진 -->
				<img src="<?php print $dir_path;?>images/slide_3.jpg" style="width:100%;" class="pc">
				<img src="<?php print $dir_path;?>images/mb_slide_3.jpg" style="width:100%;" class="mb">
			</div>
			<div class="item"> <!-- 마닐라아카데미 아이들 -->
				<img src="<?php print $dir_path;?>images/slide_4.jpg" style="width:100%;" class="pc">
				<img src="<?php print $dir_path;?>images/mb_slide_4.jpg" style="width:100%;" class="mb">
			</div>
			<div class="item"> <!-- 마닐라아카데미 고등부 -->
				<img src="<?php print $dir_path;?>images/slide_5.jpg" style="width:100%;" class="pc">
				<img src="<?php print $dir_path;?>images/mb_slide_5.jpg" style="width:100%;" class="mb">
			</div>
		</div>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="sr-only">Previous</span> </a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="sr-only">Next</span> </a>
	</div>
	<!--// 슬라이드 -->

	<!--메인페이지 콘텐트 -->
	<div class="contents frame">
		<div class="row">
			<!--공지사항 박스-->
			<div class="box1">
				<div class="panel panel-default">
					<div class="panel-heading"><strong>학교소식</strong> News Letter.
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="javascript:goPage('mis', 'IS_020.php', 2, '<?php print $menu_flg;?>');"><strong>[ more ]</strong></a></div>
					<div class="panel-body">
						<table>
<?php 
	$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
	if( $conn->connect_error ) {
		die("Connection failed: " . $conn->connect_error);
	}
	$result = $conn->query($sql);
	while( $row = $result->fetch_assoc() ) {
?>
							<tr>
								<td><a href="javascript:goBodyPopup('<?php print $row["BB_NO"];?>');"><strong><?php print $row["BB_TITLE"];?></strong></a></td>
								<td>[<?php print $row["BB_WRT_DT"];?>]</td>
							</tr>
							<div id='<?php print "myModal".$row["BB_NO"];?>' class="modal fade" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title"><?php print $row["BB_TITLE_ALL"];?></h4>
										</div>
										<div class="modal-body">
											<textarea class="board-textarea" rows="10" style="width:100%" readonly><?php print $row["BB_MESSAGE"];?></textarea>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
<?php 
	}
	$conn->close();
?>
						</table>
					</div>
				</div>
			</div>
			<!--//공지사항 박스-->
			
			<!--인포아이콘 버튼 박스-->
			<div class="box2">
				<div><i class="fa fa-university" aria-hidden="true"></i><a href="javascript:goPage('mbg', 'BG_030.php', 3, '');">입학안내</a></div>
				<div><i class="fa fa-graduation-cap" aria-hidden="true"></i><a href="javascript:goPage('mce', 'CE_010.php', 1, '');">교육과정</a></div>
				<div><i class="fa fa-users" aria-hidden="true"></i><a href="javascript:goPage('mfk', 'FK_020.php', 2, '');">교사모집</a></div>
			</div>
			<!--//인포아이콘 버튼 박스-->
			
			<!--연락처 박스-->
			<div class="box3">
				<div class="panel panel-default">
					<div class="panel-heading"><strong><i class="fa fa-phone-square" aria-hidden="true"></i> 연락처</strong> Contact</div>
					<div class="panel-body">
						<div class="contactus1"> <span>유치 - 070 8638 3944</span>
							<br> <span>초등 - 070 8638 3945</span>
							<br> <span>중등 - 070 8638 3946</span>
							<br> <span>행정실 - 070 8638 3355</span>
							<br> </div>
						<div class="contactus2">
							<div><i class="fa fa-map-marker" aria-hidden="true"></i><a href="javascript:goPage('mag', 'AG_070.php', 7, '');">찾아오시는길</a></div>
							<div><i class="fa fa-phone" aria-hidden="true"></i> 대표전화</div>
						</div>
					</div>
				</div>
			</div>
			<!--//연락처 박스-->
		</div>
	</div>
	<!--// 메인페이지 콘텐트 -->
	<!-- 푸터-->
	<?php include("footer_menu.php"); ?>
	<!-- // 푸터-->



	<!-- 팝업창 선언하기 시작 -->
	
	<div id='noticeModal' class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header" style="background-color: #BDF7FF;">
					<h4 class="modal-title">2019학년도 2학기 학생 모집 안내</h4>
				</div>
				<div class="modal-body">
					<p style="padding-left:10px;"><span class="badge" style="font-size:10px;"> </span> 초&nbsp;&nbsp;&nbsp;&nbsp;등 : 각 학년 O명</p><br>
					<p style="padding-left:10px;"><span class="badge" style="font-size:10px;"> </span> 중&nbsp;&nbsp;&nbsp;&nbsp;등 : G7, G8, G10 각 O명</p><br>
					<p style="padding-left:10px;"><span class="badge" style="font-size:10px;"> </span> 서류접수기간 : 2019년 5월 20일 ~ 2019년 6월 21일</p><br>
					<p style="padding-left:10px;"><span class="badge" style="font-size:10px;"> </span> 합&nbsp;격&nbsp;발&nbsp;표 : 2019년 7월 8일 발표</p><br>
					<p style="padding-left:10px;"><span class="badge" style="font-size:10px;"> </span> 등&nbsp;&nbsp;&nbsp;록&nbsp;&nbsp;&nbsp;일 : 2019년 8월 5일 ~ 2019년 8월 9일</p><br>
					<!-- p style="padding-left:110px; color:blue;">※ 기타 자세한 내용은 '학생모집안내' 버튼을 클릭해주세요.</p>  -->
				</div>
				<!-- div class="modal-header" style="background-color: #BDF7FF;">
					<h4 class="modal-title">2019학년도 교사선교사 수시 모집 안내</h4>
				</div>
				<div class="modal-body">
					<p style="padding-left:10px;"><span class="badge" style="font-size:10px;"> </span> 모집분야 및 인원</p><br>
					<p style="padding-left:30px;">초등 : 담임1</p><br>
					<p style="padding-left:30px;">중등 : 수학2, 사회1, 역사1</p><br>
					<p style="padding-left:30px;">행정 : 통번역1, 시설차량관리1, 전산홍보1</p><br>					
					<p style="padding-left:110px; color:blue;">※ 기타 자세한 내용은 '교사모집안내' 버튼을 클릭해주세요.</p>
				</div> -->
				<div class="modal-footer" style="background-color: #BDF7FF;">
					<button type="button" onClick="javascript:goPage('mbg', 'BG_030.php', 3, '');" class="btn btn-default" data-dismiss="modal">학생모집안내</button>
					<!-- button type="button" onClick="javascript:goPage('mfk', 'FK_020.php', 2, '');" class="btn btn-default" data-dismiss="modal">교사모집안내</button> -->
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	
	<div id='notice3Modal' class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header" style="background-color: #BDF7FF;">
					<h4 class="modal-title">2019학년도 주요학사일정</h4>
				</div>
				<div class="modal-body">
					<p style="padding-left:30px;"><span class="badge" style="font-size:10px;"> </span> 시업식 : 3/4(월)</p><br>
					<p style="padding-left:30px;"><span class="badge" style="font-size:10px;"> </span> 1학기 종업식 : 7/26(금)</p><br>
					<p style="padding-left:30px;"><span class="badge" style="font-size:10px;"> </span> 2학기 개학일 : 8/16(금)</p><br>
					<p style="padding-left:30px;"><span class="badge" style="font-size:10px;"> </span> 졸업식 및 종업식 : 12/20(금)</p><br>
					<p style="padding-left:30px; color:blue;">※학부모님께서는 항공권 구입 등 자녀 학사일정에 착오없으시기 바랍니다.</p>
				</div>
				<div class="modal-footer" style="background-color: #BDF7FF;">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
		
	<div id='notice2Modal' class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header" style="background-color: #BDF7FF;">
					<h4 class="modal-title">2019학년도 대학합격현황</h4>
				</div>
				<div class="modal-body">
					<p style="padding-left:30px;"></p><br><br>
					<p style="padding-left:30px;">고려대학교 1명 / 연세대학교 8명 / 서울교육대학교 1명 / 경기대학교 1명 </p><br>
					<p style="padding-left:30px;">한양대학교 3명 / 경희대학교 2명 / 상명대학교 1명 / 서울여자대학교 1명</p><br>
					<p style="padding-left:30px;">한동대학교 9명 / 명지대학교 1명 / 성균관대학교 4명 / 수원대학교  1명</p><br>
					<p style="padding-left:30px;">을지대학교 1명 / 숙명여자대학교 2명 / 순천향대학교 1명  / 우송대학교 1명</p><br>
					<p style="padding-left:30px;">총신대학교 2명/ 인하대학교 1명  / 가천대학교 1명 / 차의과학대학교 1명</p><br><br><br>
					<p style="padding-left:30px;">* 합격을 진심으로 축하드립니다.</p><br>
					<p style="padding-left:30px;">* 중복합격 포함(수시 전형 합격자 발표 진행중) </p>
				</div>
				<div class="modal-footer" style="background-color: #BDF7FF;">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>


	<div id='notice4Modal' class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header" style="background-color: #BDF7FF;">
					<h4 class="modal-title">서류발급 신청안내</h4>
				</div>
				<div class="modal-body">
					<p style="padding-left:30px;"><span class="badge" style="font-size:10px;"> </span> &nbsp;대학입시를 위한 서류 발급 신청은 메일로만 신청 받습니다.</p><br>
				</div>
				<div class="modal-footer" style="background-color: #BDF7FF;">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>


	<div id='notice1Modal' class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header" style="background-color: #BDF7FF;">
					<h4 class="modal-title">2020학년도 교사 선교사 모집</h4>
				</div>
				<div class="modal-body">
					<p style="padding-left:30px;"><span class="badge" style="font-size:10px;"> </span> 모집일시 : 2019년 11월 30일(수)까지</p><br>
					<p style="padding-left:30px;"><span class="badge" style="font-size:10px;"> </span> 접수방법 : 본교 메일을 통하여 접수(지원양식 홈페지 다운로드)</p><br>
					<p style="padding-left:30px; color:blue;">※자세한 내용은 지원양식 다운로드를 참조해 주시기 바랍니다.</p>
				</div>
				<div class="modal-footer" style="background-color: #BDF7FF;">
					<button type="button" onClick="javascript:goPage('mfk', 'FK_020.php', 2, '');" class="btn btn-default" data-dismiss="modal">교사모집안내</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- 팝업창 선언하기 끝 -->
</body>
<script>
// 언어 변경
setLanguage("<?php echo $lang_flg; ?>");
</script>
</html>