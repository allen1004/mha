<?php 
	require_once("../dbconfig.php");
	session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
		$userId = mysqli_real_escape_string($conn, $_POST['user_id']);
		$passWord = mysqli_real_escape_string($conn, $_POST['user_pw']);

		$sql = "SELECT 
					USER_ID, USER_NM, USER_AUTH
				FROM TB_USER_INFOR
				WHERE USER_ID = '$userId' AND USER_PWD = '$passWord' ";

		$result  = $conn->query($sql);
		$row     = $result->fetch_assoc();
		$user_id = $row['USER_ID'];
		$user_nm = $row['USER_NM'];
		$user_auth = $row['USER_AUTH'];
		$conn->close();
		
		$_SESSION['user_id'] = $user_id;
		$_SESSION['user_nm'] = $user_nm;
		
		if( $user_nm == '' ) {
			echo 'fail';			
		} else {
			echo $user_nm;			
		}
	} else {
		echo 'No Data!';
	}
?>