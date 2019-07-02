<?php
include_once 'bradutils2.php';
//$twid= 'A123456789';
$twid= createTWId();
echo $twid .'<br>';
if(isTWId($twid)){
    echo 'OK';
   
}
else{
    echo 'XX';
   
}
echo'';

?>