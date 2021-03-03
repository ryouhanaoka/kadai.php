<?php

function product($arr) {
  
  $result = 1;
  foreach($arr as $value){
    $result *= $value; 
}
    return $result;
}
echo product(array(1, 3, 5, 7, 9));

?>

<?php
/*function product($arr) {
  $arr = array(1, 3, 5, 7, 9 );
  $num = count($arr);
  for ($i = 0; $i < $num; $i++) {
      $value *= $arr;
} 
   $return =$value;
}
   echo product($arr);*/
?>

<?php
/*$arr = [1,3,5,7,9];
$num = count($arr);
$result = 1;

for ($i = 0; $i < $num; $i++) {
    $value = $arr[$i];
}
    $result *= $value;
echo $result;*/
?>