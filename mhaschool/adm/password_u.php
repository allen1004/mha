<?php
require_once('../dbconfig.php');
	
$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
$cur_pwd = mysqli_real_escape_string($conn, $_POST['cur_pwd']);
$new_pwd = mysqli_real_escape_string($conn, $_POST['new_pwd']);
$cfm_pwd = mysqli_real_escape_string($conn, $_POST['cfm_pwd']);

if( $conn->connect_error ) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE TB_USER_INFOR SET 
			USER_PWD = '$cfm_pwd'
		WHERE  USER_ID = '$user_id'
			AND USER_PWD = '$cur_pwd' ";

if( $conn->query($sql) === TRUE) {
	echo "sucess";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>