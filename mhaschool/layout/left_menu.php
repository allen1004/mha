<?php
session_start();
$setLang = 'ko';
$setUserNm = '';
$setUserId = '';

if ( isset($_SESSION['lang_flg']) ) {
	$setLang = $_SESSION['lang_flg'];
}

if( isset($_SESSION['user_nm']) ) {
	$setUserNm = $_SESSION['user_nm'];
	$setUserId = $_SESSION['user_id'];
}

if( $setLang == 'ko' ) {
	include("../layout/language_ko.php");
} else {
	include("../layout/language_en.php");
}

//<li class="sidenav" id="a_1">
//<a href="javascript:goSubPage(\'AG_010.php\', 1);" data-langNum="A01">재단이사장 인사말</a>
//</li>


$a_menu = '
<ul class="nav">
	<li class="sidenav" id="a_2">
		<a href="javascript:goSubPage(\'AG_020.php\', 2);" data-langNum="A02">학교장 인사말</a>
	</li>
	<li class="sidenav" id="a_3">
		<a href="javascript:goSubPage(\'AG_030.php\', 3);" data-langNum="A03">건학이념</a>
	</li>
	<li class="sidenav" id="a_4">
		<a href="javascript:goSubPage(\'AG_040.php\', 4);" data-langNum="A04">교육목표 및 방향</a>
	</li>
	<li class="sidenav" id="a_5">
		<a href="javascript:goSubPage(\'AG_050.php\', 5);" data-langNum="A05">교가 및 상징</a>
	</li>
	<li class="sidenav" id="a_6">
		<a href="javascript:goSubPage(\'AG_060.php\', 6);" data-langNum="A06">연혁</a>
	</li>
	<li class="sidenav" id="a_7">
		<a href="javascript:goSubPage(\'AG_070.php\', 7);" data-langNum="A07">학교위치</a>
	</li>
</ul>';

$b_menu = '
<ul class="nav">
	<li class="sidenav" id="b_1">
		<a href="javascript:goSubPage(\'BG_010.php\', 1);" data-langNum="B01">유치반 입학전형</a>
	</li>
	<li class="sidenav" id="b_2">
		<a href="javascript:goSubPage(\'BG_020.php\', 2);" data-langNum="B02">초등 입학전형</a>
	</li>
	<li class="sidenav" id="b_3">
		<a href="javascript:goSubPage(\'BG_030.php\', 3);" data-langNum="B03">중/고등 입학전형</a>
	</li>
</ul>';

$c_menu = '
<ul class="nav">
	<li class="sidenav" id="c_1">
		<a href="javascript:goSubPage(\'CE_010.php\', 1);" data-langNum="C01">학사일정</a>
	</li>
	<li class="sidenav" id="c_2">
		<a href="javascript:goSubPage(\'CE_020.php\', 2);" data-langNum="C02">유치반 교육과정</a>
	</li>
	<li class="sidenav" id="c_3">
		<a href="javascript:goSubPage(\'CE_030.php\', 3);" data-langNum="C03">초등 교육과정</a>
	</li>
	<li class="sidenav" id="c_4">
		<a href="javascript:goSubPage(\'CE_040.php\', 4);" data-langNum="C04">중/고등 교육과정</a>
	</li>
</ul>';

$d_menu = '
<ul class="nav">
	<li class="sidenav" id="d_1">
		<a href="javascript:goSubPage(\'DS_010.php\', 1);" data-langNum="D01">비교과</a>
	</li>
	<li class="sidenav" id="d_2">
		<a href="javascript:goSubPage(\'DS_020.php\', 2);" data-langNum="D02">명예 학생제도</a>
	</li>
</ul>';

$f_menu = '
<ul class="nav">
	<li class="sidenav" id="f_1">
		<a href="javascript:goSubPage(\'FK_010.php\', 1);" data-langNum="F01">섬기는 분들</a>
	</li>
	<li class="sidenav" id="f_2">
		<a href="javascript:goSubPage(\'FK_020.php\', 2);" data-langNum="F02">모집 안내</a>
	</li>
</ul>';

//<li class="sidenav" id="g_3"><a href="javascript:goSubPage(\'GN_030.php\', 3);" data-langNum="G03">생활관 계획안</a></li>
$g_menu = '
<ul class="nav">
	<li class="sidenav" id="g_1">
		<a href="javascript:goSubPage(\'GN_010.php\', 1);" data-langNum="G01">생활관 안내</a>
	</li>
	<li class="sidenav" id="g_2">
		<a href="javascript:goSubPage(\'GN_020.php\', 2);" data-langNum="G02">생활관 규정</a>
	</li>
</ul>';

$h_menu = '
<ul class="nav">
	<li class="sidenav" id="h_1">
		<a href="javascript:goSubPage(\'HN_010.php\', 1);" data-langNum="H01">교목실 안내</a>
	</li>
	<li class="sidenav" id="h_2">
		<a href="javascript:goSubPage(\'HN_020.php\', 2);" data-langNum="H02">예배 안내</a>
	</li>
</ul>';

$i_menu = '
<ul class="nav">
	<li class="sidenav" id="i_1">
		<a href="javascript:goSubPage(\'IS_010.php\', 1);" data-langNum="I01">급식 안내</a>
	</li>
	<li class="sidenav" id="i_2">
		<a href="javascript:goSubPage(\'IS_020.php\', 2);" data-langNum="I02">학교 소식</a>
	</li>
</ul>';

$j_menu = '
<ul class="nav">
	<li class="sidenav" id="j_1">
		<a href="javascript:goSubPage(\'JG_010.php\', 1);" data-langNum="J01">장학금 후원</a>
	</li>
	<li class="sidenav" id="j_2">
		<a href="javascript:goSubPage(\'JG_020.php\', 2);" data-langNum="J02">선교사 후원</a>
	</li>
</ul>';


$admin_menu = '
<ul class="nav">
	<li class="sidenav" id="k_1">
		<a href="javascript:goSubPage(\'BB_010L.php\', 1);">학교소식관리</a>
	</li>
	<li class="sidenav" id="k_2">
		<a href="javascript:goSubPage(\'BB_020L.php\', 2);">행사말씀관리</a>
	</li>
	<li class="sidenav" id="k_3">
		<a href="javascript:goSubPage(\'BB_030L.php\', 3);">후원내역관리</a>
	</li>
</ul>';

$footers = '
<p class="footer_info">P.O.BOX 1084 Antipolo City, Philppines Tel:0920 901 1457 E-Mail:hankukac@hanmail.net
<br> 학교연락처 : 401-7854, 0920 901 1457 / 행정실 : 070 8638 3355 / 교장실 : 070 8637 3355
<br> 유치원 : 070 8638 3944 / 초등 : 070 8638 3945 / 중등 : 070 8638 3946
<span>Copyrightⓒ 2017 All rights reserved by manilahankukacademy</span>
</p>';

$a_login = '';

if( $setUserNm == '' ) {
	$a_login = '<li><a href="javascript:goLogin(\'s\');"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Login</a></li>';
} else {
	$a_login = '<li><a href="javascript:goLogout(\'s\');"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Logout('.$setUserId.')</a></li>';
}
?>