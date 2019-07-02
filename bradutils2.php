<?php
function isTWId($id) : bool
{
}

function createTWId($isMale = true) : string{
    $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
    $id = substr($letters,rand(0,25),1);
    $id .= $isMale?'1':'2';
    for($i=0; $i<7 ;$i++) $id .= rand(0,9);
    for($i=0; $i<=9 ;$i++){
        if(isTWId($id . $i)){
            $id .= $i;
            break;
        }
    }
return $id;
}
?>
