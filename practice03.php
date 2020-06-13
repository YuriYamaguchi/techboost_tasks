<?php

// task 1
$name = "Yuri Yamaguchi";

if ($name == "Yuri Yamaguchi") {
  echo "私は".$name."です";
}
else {
  echo "あなたの名前ではありません";
}

echo "\n";

// task 2
$sum = 0;
for ($i = 0; $i <= 10000; $i++) {
  
    $sum += $i;
    
}

echo $sum;
echo "\n";

// task 3
$fruits = array("mango", "strawberry", "grape", "peach", "melon");

foreach ($fruits as $fruit) {
  echo $fruit;
  echo "\n";
}

// task 4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

?>