 <?php

 // 0-51 數字不重複程式
 

 $array = [];
 $tmp=0;
 $pos=0;

 
 for($i=0; $i<=51; $i++){
    $array[$i]=$i;
    $pos = rand(0,51) ;
  
    
    $tmp = $array[$pos]; 
   
    $array[$pos] = $array[$i];
    $array[$i] = $tmp;

    //echo  $tmp. '<br>';
     echo  $array[$i] . '<br>';
 
 }