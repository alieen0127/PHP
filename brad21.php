<?php
//$p[出現次數]
$p =array(1 => 0,0,0,0,0,0);
//var_dump($p);
for($i=0;$i<100000;$i++){
    $point=rand(1,9);
  // $p[rand(1,6)]++; 簡化
    $p[$point>6?$point-3:$point]++;
}

foreach($p as $key => $value){
    echo "{$key}點出現{$value}次<br>";
}

