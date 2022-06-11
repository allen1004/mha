<?php 
	$lang_flg = isset($_POST['lang_flg']) ? $_POST['lang_flg'] : 'ko';

	session_start();
	$_SESSION['lang_flg'] = $lang_flg;
	echo $_SESSION['lang_flg'];
?>