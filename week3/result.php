<?php

$uid = $_GET["uid"];
$uname = $_GET["uname"];
$gender = $_GET["gender"];
$interest = $_GET["interest"];

//if else判斷
if (is_numeric($uid) && is_numeric($uname)) {
	echo $uid * $uname;	
}
else{
	echo "please enter number<br>";
	echo "<a href='w4.php'>回上一頁</a>";
}

//顯示內容
echo "<br>uid is:".$uid."<br>";
echo "uname is:$uname<br>";

//foreach for 的應用
foreach ($interest as $key) {
	echo "你的興趣是: $key <br>";
}
for ($i=0; $i <count($interest) ; $i++) { 
	echo "你的興趣是是是是是是:".$interest[$i]."<br>";
}

if ($gender == "男") {
	echo "你的性別是男生";
	echo "<body bgcolor= 'green'>";

}
else{
	echo "你的性別是女生";
}
?>

