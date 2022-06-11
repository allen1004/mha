<?php
$ips_arr = array("192.168.*.*");
$ptet = 0;
$ip = '';
if( !empty($_SERVER['HTTP_CLIENT_IP']) ) {
	$ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif( !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
	$ip = $_SERVER['REMOTE_ADDR'];
}

$ip = '192.168.1.1';

echo in_array($ip, $ips_arr);

if( in_array($ip, $ips_arr) ) {
	$ptet = 1;
}
echo '::::'.$ptet;
?>