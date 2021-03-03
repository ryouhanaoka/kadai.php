<?php
 $str  ="<h1>strip_tags関数</h1>"
    ."<p>タグ取り除いていくっ！</p>";
 echo strip_tags($str)."\n" ;

$members =array('一郎','次郎');
array_push($members,'太郎','四郎');
print_r($members);

$a = [1, 2, 3];
$b = [4, 5, 6];
$c = array_merge($a, $b);
print_r($c);

$time = mktime(12, 31, 17);
var_dump(date('Y年m月d日h時i分s秒', $time));
echo ('');

$timestamp = time() + (60 * 60 * 24) * 7;
$next_week = date('Y年m月d日H時i分s秒', $timestamp);
print $next_week;

echo date('Y-m-d H:i:s', mktime(17, 45,36,3,3,2021));
?>
