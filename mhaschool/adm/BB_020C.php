<?php
require_once('../dbconfig.php');

$reg_id     = '';//$_SESSION['user_id'];

$bb_title = '';
$bb_message = '';
$bb_wrt_nm = '';
$bb_no = '';
$crd_type = 0;
$today = (string)date("Ymd");

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$bb_title = isset($_POST['bb_title']) ? $_POST['bb_title'] : '';
	$bb_message = isset($_POST['bb_message']) ? $_POST['bb_message'] : '';
	$bb_wrt_nm = isset($_POST['bb_wrt_nm']) ? $_POST['bb_wrt_nm'] : '';
	$bb_no = isset($_POST['bb_no']) ? $_POST['bb_no'] : '';
	$crd_type = isset($_POST['crd_type']) ? $_POST['crd_type'] : 0;
}
$sql_c = "
		INSERT INTO TB_BOARD_HN020 (
			BB_TITLE, BB_MESSAGE, BB_WRT_DT, BB_WRT_NM, REGT_ID, REG_DT, MOD_ID, MOD_DT
		) VALUES (
			'$bb_title', '$bb_message', '$today', '$bb_wrt_nm', '$reg_id', now(), '$reg_id', now() 
		)
		";

$sql_u = "
		UPDATE TB_BOARD_HN020 SET 
			BB_TITLE     = '$bb_title'
			, BB_MESSAGE = '$bb_message'
			, BB_WRT_NM  = '$bb_wrt_nm'
			, MOD_ID     = '$reg_id'
			, MOD_DT     = now()
		WHERE BB_NO = $bb_no
		";

$sql_d = "DELETE FROM TB_BOARD_HN020 WHERE BB_NO = $bb_no ";

$sql = "";
$rtn_mesg = "";
if( $crd_type == 'C' ) {
	$sql = $sql_c;
	$rtn_mesg = "성공적으로 저장되었습니다.";
} else if( $crd_type == 'U' ) {
	$sql = $sql_u;
	$rtn_mesg = "성공적으로 수정되었습니다.";
} else if( $crd_type == 'D' ) {
	$sql = $sql_d;
	$rtn_mesg = "성공적으로 삭제되었습니다.";
}

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);
if( $conn->connect_error ) {
	die("Connection failed: " . $conn->connect_error);
}
if( $conn->query($sql) === TRUE) {
	echo $rtn_mesg;
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>