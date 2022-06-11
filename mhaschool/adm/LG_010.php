<?php
session_start();
$dir_path = '../';
$menu_flg = 'L';
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

	<script>var setUrsNm = "<?php print $setUserNm; ?>";</script>
	
	<!-- JS -->
	<script src="<?php print $dir_path;?>js/jquery-3.2.1.min.js"></script>
	<script src="<?php print $dir_path;?>js/bootstrap.min.js"></script>
	<script src="<?php print $dir_path;?>js/common.js"></script>
	<script src="<?php print $dir_path;?>js/language.pack.js"></script>
</head>

<body>
	<!--header 공통부분-->
	<header>
	<!--top_header 로그인, 가입, 로고등 있는 탑해더-->
		<?php include($dir_path."header_menu.php"); ?>
	</header>

	<!--서브페이지 콘텐트 -->
	<div class="contents frame">
		<div class="row common">
			<!--서브페이지 정보 넣는 곳-->

			<div class="loginbg1">

				<div class="loginbg2">
						<form name="frm" id="frm" action="#" method="post">
						<table class="login-table">
							<tr><td height="20" colspan="3"></td></tr>
							<tr>
								<td valign="middle" width="200px" align="right" class="login-td" style="color:white;">ID</td>
								<td class="login-td" width="200px">
									<input type="text" class="login-text-box" name="user_id" id="user_id" tabindex="1" value="" onkeypress="EnterKey_Action()">
								</td>
								<td rowspan="2" class="login-td" width="200px" align="center">
									<input type="button" class="login-button" name="btn_rtv" value="LOG-IN" onClick="javascript:goLoginOn();">
								</td>
							</tr>
							<tr>
								<td valign="middle" align="right" class="login-td" style="color:white;">PASSWORD</td>
								<td class="login-td">
									<input type="password" class="login-text-box" name="user_pw" id="user_pw" value="" tabindex="2" onkeypress="EnterKey_Action()">
								</td>
							</tr>
							<tr><td height="20" colspan="3"></td></tr>
						</table>
						<table width="100%">
							<tr>
								<td height="100px" align="center">
									<input type="button" class="pwd-button" name="btn_rtv" value="PassWord Change" onClick="javascript:goChangePW();">
								</td>
							</tr>
						</table>
						</form>
				</div>
			<!--// 서브페이지 정보 넣는 곳-->

			</div>

		</div>
	</div>
	<!--// 서브페이지 콘텐트 -->
	
	<!-- 푸터-->
	<?php include($dir_path."footer_menu.php"); ?>
	<!-- // 푸터-->
</body>
<script type="text/JavaScript">
// 언어 변경
setLanguage("<?php echo $_SESSION['lang_flg'];?>");

//passworl change
function goChangePW() {
	var v_id = $("#user_id").val();
	if( v_id == "" ) {
		alert("Should enter your id when you change the password.");
		document.frm.id.focus();
		return;
	}
	var opt  = "toolbar=no ";
	opt += ",menubar=no ";
	opt += ",location=no ";
	opt += ",resizable=no ";
	opt += ",status=no ";
	opt += ",width=470,height=220";
	opt += ",top=310,left=510";
	window.open("password.php?user_id=" + v_id, "gcs_pw_modify", opt);
}
</script>
</html>