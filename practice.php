<?php
echo 'hello php!';

$height = 220;
if ($height < 150) {
    echo "150cm 未満の方はご乗車できません。";
} else if ($height >= 200){
    echo"200cm　以上の方はご乗車できません。";
}else { 
    echo"ご乗車になれます。";
}


$weekday = "火曜";

switch ($weekday) {
    case "月曜":
    case "火曜":
     echo "可燃ゴミの日です。";
     break;
    case "水曜":
     echo "資源ゴミの日です。";
     break;
    default:
     echo "回収はありません";
     break;
}

$a = 3;
$b = 3;
$c = 3;

var_dump($a == $b);

for($i = 0; $i < 10; $i++){
  echo $i;
}


$total = 0;
echo $total;

for ($i = 0; $i <= 100; $i++) {
 $total += $i;
}
echo $total;

$fruits = array