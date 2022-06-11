<?php
	include("../layout/template.class.php");
	include("../layout/left_menu.php");
	require_once("../dbconfig.php");

	$bb_no = 0;
	$page = 0;
	$oo = 0;
	if($_SERVER["REQUEST_METHOD"] == "GET") {
		$page = isset($_GET['page']) ? $_GET['page'] : 0;
		$bb_no = isset($_GET['no']) ? $_GET['no'] : 0;
		$oo = isset($_GET['oo']) ? $_GET['oo'] : 0;
	}
	$bb_title = "";
	$bb_message = "";
	$bb_wrt_dt = "";
	$bb_wrt_nm = "";
	$bb_attach_file = "";

	if( $bb_no > 0 && $oo == 99 ) {
		$sql = "SELECT BB_TITLE, BB_MESSAGE, BB_WRT_DT, BB_WRT_NM, BB_ATTACH_FILE FROM TB_BOARD_BB010 WHERE BB_NO = $bb_no";
	
		$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
		if( $conn->connect_error ) {
			die("Connection failed: " . $conn->connect_error);
		}
	
		$result  = $conn->query($sql);
		$row     = $result->fetch_assoc();
		$bb_title = $row['BB_TITLE'];
		$bb_message = $row['BB_MESSAGE'];
		$bb_wrt_dt = $row['BB_WRT_DT'];
		$bb_wrt_nm = $row['BB_WRT_NM'];
		$bb_attach_file = $row['BB_ATTACH_FILE'];
	}

	$content = '
	<table class="sub_table">
		<tr>
			<th class="sub_td">
				<table>
					<tr>
						<th class="sub_td">
							<p class="sub_main_title">학교소식관리</p>
						</th>
					</tr>
				</table>
			</th>
		</tr>
		<tr>
			<th class="sub_td_message">
			
				<table class="table table-bordered">
					<tr>
						<th style="text-align:right;width:20%;">제목</th>
						<th><input type="text" class="board-text" id="bb_title" name="bb_title" style="width:100%;" value="'.$bb_title.'"></th>
					</tr>
					<tr>
						<th style="text-align:right;width:20%;">내용</th>
						<th><textarea class="board-textarea" name="bb_message" id="bb_message" rows="8">'.$bb_message.'</textarea></th>
					</tr>
					<tr>
						<th style="text-align:right;width:20%;">첨부파일</th>
						<th>
							<input type="file" style="width:300px;" name="bb_attach_file" id="bb_attach_file">'.$bb_attach_file.'
						</th>
					</tr>
					<tr>
						<th style="text-align:right;width:20%;">작성자</th>
						<th><input type="text" class="board-text" id="bb_wrt_nm" name="bb_wrt_nm" value="'.$bb_wrt_nm.'"></th>
					</tr>
				</table>
			</th>
		</tr>
		<tr>
			<th style="padding: 0px 50px 40px 0px; text-align: right;">
				<input type="button" class="board-button" value="List" onClick="javascript:goSubPage(\'BB_010L.php\', 1);">
				<input type="button" class="board-button" value="Save" onClick="javascript:goBoardEventDep(1, 10);">
				<input type="button" class="board-button" value="Modify" onClick="javascript:goBoardEventDep(1, 11);">
				<input type="button" class="board-button" value="Delete" onClick="javascript:goBoardEventDep(1, 12);">
			</th>
		</tr>
	</table>
	<input type="hidden" name="bb_no" id="bb_no" value="'.$bb_no.'">
	';
	/**
	 * Loads our layout template, settings its title and content.
	 */
	$layout = new Template("../layout/com_layout.tpl");
	$layout->set("header_login", $a_login);
	$layout->set("side_menu", $admin_menu);
	$layout->set("sub_title", "학교소식관리");
	$layout->set("contents", $content);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript">
setLanguage("<?php echo $setLang;?>"); //언어 변경
$("#k_1").addClass("active");


function goBoardEventDep(oSpt, obj) {
	var oType = "";
	if( obj == 10 ) {
		oType = 'C';
	} else if( obj == 11 ) {
		oType = 'U';
	} else if( obj == 12 ) {
		oType = 'D';
	}
	var formData = new FormData();
	formData.append('bb_attach_file', $('#bb_attach_file')[0].files[0]);
	formData.append('bb_title', $("#bb_title").val());
	formData.append('bb_message', $("#bb_message").val());
	formData.append('bb_wrt_nm', $("#bb_wrt_nm").val());
	formData.append('bb_no', $("#bb_no").val());
	formData.append('crd_type', oType);
	
	$.ajax({
		type: "POST",
		url: "BB_010C.php",
		enctype: "multipart/form-data",
		data: formData,
		processData: false,  // tell jQuery not to process the data
		contentType: false,
		success: function (response) {
			if(response != "") {
				alert(response);
				goSubPage('BB_010L.php', 1);
			}
		}
	});
}
</script>