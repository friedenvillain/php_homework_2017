<?php
  echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
  date_default_timezone_set("Asia/Taipei");


// 每個月圖片不同
  $NowTime=date("Y-n-d H:i:s");
  echo '現在是 '.date('n').'月<br>';
  $month = date('n');
  // $month= 5;
  echo "<img src=\"img/".$month.".JPG\"><br>";

// 顯示現在時間>>年月日時分秒星期
$weekarray=array("日","一","二","三","四","五","六");

echo date("Y")."年";
echo date("m")."月";
echo date("d")."日";
echo date("H")."時";
echo date("i")."分";
echo date("s")."秒";
echo "星期".$weekarray[date("w")];
echo "<br>";

countdown(2017,12,31,0,0);


function countdown($year, $month, $day, $hour, $minute)
{
  // make a unix timestamp for the given date
  $the_countdown_date = mktime($hour, $minute, 0, $month, $day, $year, -1);

  // get current unix timestamp
  $today = time();

  $difference = $the_countdown_date - $today;
  if ($difference < 0) $difference = 0;

  $days_left = floor($difference/60/60/24);
  $hours_left = floor(($difference - $days_left*60*60*24)/60/60);
  $minutes_left = floor(($difference - $days_left*60*60*24 - $hours_left*60*60)/60);
  // OUTPUT
  echo "今天的日期是 ".date("F j, Y, g:i a")."<br/>";
  echo "世界末日在 ".date("F j, Y, g:i a",$the_countdown_date)."<br/>";
  echo "離世界末日剩餘".$days_left."天".$hours_left."時".$minutes_left."分";
  echo "<br>";
}
?>