<?php
$name = "tommy";
if ($name == "Akira Hara") {
    echo "私は{$name}です"; /* "{変数名} ある場合"　*/
} else {
    echo $name . 'ではありません'; /* $変数名 . '文字列'　*/
}

$total = 0;
for($i = 0; $i < 10000; $i++){
    $total += $i;
}
echo $total;


$fruits = array ("apple", "orange", "lemon", "pine", "watermelon");

foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++) {
  if ($i % 5 == 0){
    echo $i;
    echo "\n";
  }
 }