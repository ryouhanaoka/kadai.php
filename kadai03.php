<?php
//1.
$name = "花岡 良";

if ($name = "花岡 良"){
    echo "私は花岡良です。";
} else if ($name != "花岡 良"){
    echo "花岡 良ではありません。";
}

//2.
$total = 0;
echo $total;

for($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

//3.
$fruits = array("いちご","りんご","みかん","ぶどう","かき");

foreach($fruits as $fruit){
  echo $fruit;   }
  
//4
$start = 1;

$end = 100;

for($i = $start; $i <= $end; $i++){
  if(($i % 5) == 0){
    echo $i;
    echo "\n";
  }
}
