<?php
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
   $max_number = $arr[0];
   foreach($arr as $num){
      if ($max_number < $num) {
      $max_number = $num;
      }
   }
   return $max_number;
 }
 echo max_array(array(14, 5, 6, 7, 9));
?>