<?php

$poker = [];
$i=0;



for($i=0; $i<52 ; $i++){
    do{
    $rand = rand(0,51);
    //檢查重複
    $isRepeat = false;
    for($j=0 ; $j<$i ; $j++){
        if ($rand == $poker[$j]){
            $isRepeat = true;
            break;
            }
        }
       
    }while ($isRepeat);
  
    $poker[$i]= $rand;
    echo  $poker[$i] . '<br>';

}