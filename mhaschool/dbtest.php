<?php 
	require_once("../dbconfig.php");

	$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);

	$sql = "SELECT 
				USER_ID, USER_NM, USER_AUTH
			FROM TB_USER_INFOR ";

	$result  = $conn->query($sql);
	$row     = $result->fetch_assoc();
	$user_id = $row['USER_ID'];
	$user_nm = $row['USER_NM'];
	$user_auth = $row['USER_AUTH'];
	$conn->close();
	echo $user_id;
	echo $user_nm;
?>