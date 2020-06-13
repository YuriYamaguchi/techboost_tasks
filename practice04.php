<?php

// task 1
function twice($v) {
  $result = 0;
  $result = $v * 2;
  return $result;
}
echo twice(10);

echo "\n";

// task 2
function sum($a, $b) {
  $result = 0;
  $result = $a + $b;
  return $result;
}
echo sum(2, 8);

echo "\n";

// task 3
function multiplication($arr) {

  $result = $arr[0]; 
  for ($i = 1; $i < count($arr); $i++) {
    $result *= $arr[$i];
  }
  return $result;
  
}
echo multiplication(array(1,3,5,7,9));

echo "\n";

// task 4
function max_array($arr) {
  $max_number = $arr[0];
  
  foreach($arr as $a){
    if ($max_number < $a) {
      $max_number = $a;
    }
  }
  return $max_number;
}
echo max_array(array(2,4,6,8,10));

echo "\n";

// task 5
// strip_tags
$str = "<h1>strip_tags関数</h1>"."<p>テスト</p>";
echo strip_tags($str) ."\n";

// array_push
$stack = array("ship", "train", "cycle");
array_push($stack, "airplane", "car", "bike");
print_r($stack);
echo "\n";

// array_merg
$array1 = array("city" => "Tokyo", 2, 4);
$array2 = array("a", "b", "city" => "Osaka", "country" => "Japan", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "\n";

// mktime, date
echo date("M-d-Y", mktime(0, 0, 0, 6, 14, 2020));
echo "\n";

?>