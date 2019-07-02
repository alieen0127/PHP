<?php
$year = 200;
echo $year . '<br>';
if( $year % 4 == 0 ){
   
    if($year % 100 == 0){
        echo '不是閏年';

} 
else
{
    echo '閏年';
}

}
else if($year % 400 == 0){
    echo '閏年';
}else 
{
    echo '不是閏年';
}

if(($year % 400 ==0) || ($year % 4 ==0 && $year % 100 !=0))
{
    echo 29;
}
else{
    echo 28;
}




