<?php
	$idcode=john;
	$pwdcode=1234;

	$userid = $_GET["id"];
	$userpwd = $_GET["pwd"];
	$cookie=("idcode",$userid,date());
	$cookieid=strtotime("one month");
	
	if(isset($userid) && isset($userpwd)){
		if ($userid == $idcode && $userpwd == $pwdcode) {
			echo "wellcome!!";
		}
		else{
			echo "Err";
		}
	}
	else{
		echo "Pls enter~";
	}
	
?>

http://www.w3school.com.cn/php/php_cookies.asp