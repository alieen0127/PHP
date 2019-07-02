<?php
$mon = rand(1,12);
echo  $mon . '<br>';
switch ($mon){
    case 1: case 3: case 5: case 7: case 8: case 10:  case 12:
    echo '31';
    break;
    case 2:
    echo '28';
    break;
      
        default:
    echo '30';
}
echo '<hr>';