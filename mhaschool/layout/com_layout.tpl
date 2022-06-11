<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=debice-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=3.0"/>
	<title>마닐라한국아카데미</title>

	<!-- CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
	<link rel="stylesheet" href="../css/common.css">
	<link rel="stylesheet" href="../css/common.sub.css">
	
	<!-- JS -->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/common.js"></script>
	<script src="../js/language.pack.js"></script>
</head>

<body>
	<!--header 공통부분-->
	<header>
		<!--top_header 로그인, 가입, 로고등 있는 탑해더-->
		<div class="frame pc top_header">
			<div class="pc_logo">
				<a href="javascript:goHome('s');"><img src="../images/logo.jpg"></a><!-- 마닐라 한국아카데미 로고 -->
			</div>
			<ul class="top_nav pc">
				<li><a href="javascript:goFacebook('f');"><i class="fa fa-facebook-square" aria-hidden="true"></i> facebook</a></li>
				[@header_login]
				<li><a href="javascript:goSRS('s');"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> SRSystem</a></li>
				<!-- li>
					<a href="javascript:funMultiLanguage('ko', 's');">Korea</a>&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="javascript:funMultiLanguage('en', 's');">English</a>
				</li -->

			</ul>
		</div>
		<!--//top_header 로그인, 가입, 로고등 있는 탑해더-->
		
		<!--모바일에서만 노출되는 로고-->
		<div class="mb">
			<div class="mb mb_logo">
				<a href="javascript:goHome('s');"><img src="../images/logo.jpg"></a><!-- 마닐라 한국아카데미 로고 -->
			</div>
		</div>
		
		<!--네비게이션 메뉴바-->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!--햄버거버튼 모바일에서만 노출-->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
					</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<!--탑네비부분 모바일에서만 노출되게-->
						<!-- li class="mb">
							<ul class="mb mb_top_nav">
								<li>
									<a href="javascript:funMultiLanguage('ko', 's');">Korea</a>&nbsp;&nbsp;|&nbsp;&nbsp;
									<a href="javascript:funMultiLanguage('en', 's');">English</a>
								</li>
							</ul>
						</li -->
						<!--// 탑네비부분 모바일에서만 노출되게-->
						
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" data-langNum="A0">학교소개</a>
							<ul class="dropdown-menu">
								<!-- li><a href="javascript:goPage('mag', 'AG_010.php', 1, 's');" data-langNum="A01">재단이사장 인사말</a></li -->
								<li><a href="javascript:goPage('mag', 'AG_020.php', 2, 's');" data-langNum="A02">학교장 인사말</a></li>
								<li><a href="javascript:goPage('mag', 'AG_030.php', 3, 's');" data-langNum="A03">건학이념</a></li>
								<li><a href="javascript:goPage('mag', 'AG_040.php', 4, 's');" data-langNum="A04">교육목표 및 방향</a></li>
								<li><a href="javascript:goPage('mag', 'AG_050.php', 5, 's');" data-langNum="A05">교가 및 상징</a></li>
								<li><a href="javascript:goPage('mag', 'AG_060.php', 6, 's');" data-langNum="A06">연혁</a></li>
								<li><a href="javascript:goPage('mag', 'AG_070.php', 7, 's');" data-langNum="A07">학교위치</a></li>
							</ul>
						</li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" data-langNum="B0">입학안내</a>
							<ul class="dropdown-menu">
								<li><a href="javascript:goPage('mbg', 'BG_010.php', 1, 's');" data-langNum="B01">유치반 입학전형</a></li>
								<li><a href="javascript:goPage('mbg', 'BG_020.php', 2, 's');" data-langNum="B02">초등 입학전형</a></li>
								<li><a href="javascript:goPage('mbg', 'BG_030.php', 3, 's');" data-langNum="B03">중/고등 입학전형</a></li>
							</ul>
						</li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" data-langNum="C0">교육과정</a>
							<ul class="dropdown-menu">
								<li><a href="javascript:goPage('mce', 'CE_010.php', 1, 's');" data-langNum="C01">학사일정</a></li>
								<li><a href="javascript:goPage('mce', 'CE_020.php', 2, 's');" data-langNum="C02">유치반 교육과정</a></li>
								<li><a href="javascript:goPage('mce', 'CE_030.php', 3, 's');" data-langNum="C03">초등 교육과정</a></li>
								<li><a href="javascript:goPage('mce', 'CE_040.php', 4, 's');" data-langNum="C04">중/고등 교육과정</a></li>
							</ul>
						</li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" data-langNum="D0">학생활동</a>
							<ul class="dropdown-menu">
								<li><a href="javascript:goPage('mds', 'DS_010.php', 1, 's');" data-langNum="D01">비교과</a></li>
								<li><a href="javascript:goPage('mds', 'DS_020.php', 2, 's');" data-langNum="D02">명예 학생제도</a></li>
							</ul>
						</li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" data-langNum="F0">MK선교사</a>
							<ul class="dropdown-menu">
								<li><a href="javascript:goPage('mfk', 'FK_010.php', 1, 's');" data-langNum="F01">섬기는 분들</a></li>
								<li><a href="javascript:goPage('mfk', 'FK_020.php', 2, 's');" data-langNum="F02">모집 안내</a></li>
							</ul>
						</li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" data-langNum="G0">생활관소식</a>
							<ul class="dropdown-menu">
								<li><a href="javascript:goPage('mgn', 'GN_010.php', 1, 's');" data-langNum="G01">생활관 안내</a></li>
								<li><a href="javascript:goPage('mgn', 'GN_020.php', 2, 's');" data-langNum="G02">생활관 규정</a></li>
							</ul>
						</li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" data-langNum="H0">교목실소식</a>
							<ul class="dropdown-menu">
								<li><a href="javascript:goPage('mhn', 'HN_010.php', 1, 's');" data-langNum="H01">교목실 안내</a></li>
								<li><a href="javascript:goPage('mhn', 'HN_020.php', 2, 's');" data-langNum="H02">예배 안내</a></li>
							</ul>
						</li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" data-langNum="I0">공지사항</a>
							<ul class="dropdown-menu">
								<li><a href="javascript:goPage('mis', 'IS_010.php', 1, 's');" data-langNum="I01">급식 안내</a></li>
								<li><a href="javascript:goPage('mis', 'IS_020.php', 2, 's');" data-langNum="I02">학교 소식</a></li>
							</ul>
						</li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" data-langNum="J0">후원안내</a>
							<ul class="dropdown-menu">
								<li><a href="javascript:goPage('mjg', 'JG_010.php', 1, 's');" data-langNum="J01">장학금 후원</a></li>
								<li><a href="javascript:goPage('mjg', 'JG_020.php', 2, 's');" data-langNum="J02">선교사 후원</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!--// header 공통부분-->

	<!--서브페이지 콘텐트 -->
	<div class="contents frame">
		<div class="row common">
			<!--서브페이지 서브사이드메뉴-->
			<div class="col-md-2">
				<div class="common-sidebar">
					<div class="common-usermenu">
						[@side_menu]
					</div>
				</div>
			</div>
			<!--// 서브페이지 서브사이드메뉴-->
			
			<!--서브페이지 정보 넣는 곳-->
			<div class="col-md-10">
				<!--서브페이지에 대한 이미지 (css에 background로 들어감)-->
				<div class="common-content">
					<div id="subimage" class="subtop">
						<p class="sub_title">[@sub_title]</p>
					</div>
					<div class="sub_contents">
						[@contents]
					</div>
				</div>
			</div>
			<!--// 서브페이지 정보 넣는 곳-->
		</div>
	</div>
	<!--// 서브페이지 콘텐트 -->
	
	<!-- 푸터-->
	<footer class="footer fixed-bottom">
		<div class="frame">
			<div class="footer_box footer_logo">
				<a href="javascript:goHome('s');"><img src="../images/logo_footer.png" alt="푸터 로고이미지"></a>
			</div>
			<div class="footer_box">
				[@footers]
			</div>
		</div>
	</footer>
	<!-- // 푸터-->
</body>
</html>