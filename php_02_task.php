<?php
//1.
$a = 3;
$b = 7;
$total = $a + $b;
echo $total." ";


//2.
$array_month = array("1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月");
echo $array_month[7]. " ";

//3.
$hello = "Hello,";
$name ="Y.SHINDO";
$world = "'s World!";
echo $hello.$name.$world." ";

//4.
$tech_boost = "tech";
$tech_boost .= "_boost";
echo $tech_boost." ";


//5.
//以下、元のもの　訂正箇所右側に正しい表記をコメント
//$2018_calendar = {  //変数は数字始まりは使用できない→$calendar_2018、{ ではなく、[ またはarray()
//  "January" => "1月",
//  "February" => "2月"、  //「、」ではなく「,」
//  "March" => "3月",
//  "April" => "4月",
//  "May" => "5月",
//  "June" = "6月", //= でなく、=>
//  "July" => "7月",
//  "August" => "8月",
//  "September" => "9月",
//  "October" => 10月,  //"10月"
//  "November" => "11月",
//  "December" => "12月"
//};

// 12月を表示する
//echo $2018_calendar[December];  //echo $calender_2018 ["December"]


//以下、訂正後
$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];
?>