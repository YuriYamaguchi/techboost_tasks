<?php

// practice
echo 'hello php!';
echo '<br>';

// task 1
$a = 3;
$b = 7;
echo $a+$b;

echo '<br>';

// task 2
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];

echo '<br>';

// task 3
$hello = "Hello, ";
$name = "Yuri Yamaguchi";
$world = "'s World!";
echo $hello.$name.$world;

echo '<br>';

// task 4
$tech_boost = 'tech';
$tech_boost .= ' boost';
echo $tech_boost;

echo '<br>';

// task 5
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
echo $calendar_2018["December"];

echo '<br>';

?>