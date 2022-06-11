<!DOCTYPE html>
<html>
<?php
session_start();
$dir_path = '../';
$menu_flg = 'L';
$user_id = $_GET['user_id'];
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- META -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<title>Modify (Password)</title>
	<link rel="stylesheet" href="<?php print $dir_path;?>css/common.sub.css">

	<script src="<?php print $dir_path;?>js/jquery-3.2.1.min.js"></script>
	<script src="<?php print $dir_path;?>js/language.pack.js"></script>

	<style>
  		#p-title, #p-panel {
  			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  			font-size: 12px;
  		}
  		.p-table {
			border-collapse: collapse;
			border: 1px solid gray;
  		}
		.p-th {
			text-align: left;
			height: 30px;
			background-color: #888888;
			border: 1px solid #cccccc;
			color: white;
		}

  		#p-panel table {
			border-collapse: collapse;
  		}
  		#p-panel th {
  			background-color: #eeeeee;
  			text-align: right;
  			padding-right: 10px;
  			border: 1px solid #cccccc;
  			border-radius: 3px;
  		}
  		#p-panel td {
  			text-align: left;
  			padding-left: 10px;
  			padding-right: 10px;
  			border: 1px solid #cccccc;
  			border-radius: 3px;
  		}
  		.p-button {
			background-color: #666666;
			border-radius: 5px;
			border: 1px solid #555555;
			color: white;
			padding:4px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 12px;
			cursor: pointer;
  		}
  	</style>
	<script type="text/JavaScript">
		//login
		function goModify() {
			var action = $("#frm").attr('action');
			var form_data = {
				user_id: $("#user_id").val(),
				cur_pwd: $("#cur_pwd").val(),
				new_pwd: $("#new_pwd").val(),
				cfm_pwd: $("#cfm_pwd").val()
			};
			if(form_data.cur_pwd == "") {
				alert("Enter current password!");
				document.frm.cur_pwd.focus();
				return;
			}
			if(form_data.new_pwd == "") {
				alert("Enter new password!");
				document.frm.new_pwd.focus();
				return;
			}
			if(form_data.cfm_pwd == "") {
				alert("Enter confirmation password!");
				document.frm.cfm_pwd.focus();
				return;
			}
			if(form_data.new_pwd != form_data.cfm_pwd) {
				alert("Different New and Confirmation password. Please check!");
				return;
			}
			$.ajax({
				type: "POST",
				url: action,
				data: form_data,
				success: function(response) {
					alert(response);
					if(response == 'sucess') {
						alert("Changed your password correctly!");
						window.close();
					} else {
						alert("The current password isn't correct. Please check again."+response);
					}
				}
			});
		}

		function goClose() {
			window.close();
		}
	</script>
<body>
<div id="p-title">
	<table width="100%" class="p-table">
		<tr>
			<th class="p-th">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password Modify</th>
		</tr>
	</table>
</div>
<form name="frm" id="frm" action="password_u.php" method="post">
<div id="p-panel">
	<table width="100%">
		<tr>
			<th width="40%">
				Current Password
			</th>
			<td width="60%">
				<input type="password" class="text-box" name="cur_pwd" id="cur_pwd" value="" style="">
			</td>
		</tr>
		<tr>
			<th width="40%">
				New Password
			</th>
			<td width="60%">
				<input type="password" class="text-box" name="new_pwd" id="new_pwd" value="" style="">
			</td>
		</tr>
		<tr>
			<th width="40%">
				Confirmation Password
			</th>
			<td width="60%">
				<input type="password" class="text-box" name="cfm_pwd" id="cfm_pwd" value="" style="">
			</td>
		</tr>
	</table>
</div>
	<table width="100%" border="0">
		<tr><td height="5px"></td></tr>
		<tr><td width="100%" align="center">
			<input type="button" class="p-button" name="btn_rtv" value="Modify" onClick="javascript:goModify();">
			<input type="button" class="p-button" name="btn_cls" value="Close" onClick="javascript:goClose();">
		</td></tr>
	</table>
	<input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id?>">
</form>
	<p align="center" style="font-size:14px;">Your ID is <b><?php echo $user_id?></b>.</p>
</body>
</html>