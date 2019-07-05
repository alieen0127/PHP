<?php

$img = imagecreatefromjpeg("upload/coffee.jpg");
$yellow = ImageColorallocate($img , 255,255,0);

for($i = 0; $i < 4; $i++) {
    $randAsciiNumArray     = array (rand(48,57),rand(65,90));
    $randAsciiNum         = $randAsciiNumArray [rand ( 0, 1 )];
    $randStr             = chr ( $randAsciiNum );
    imagettftext($im,30,rand(0,20)-rand(0,25),5, $i*30,rand(30,35),$yellow,
    "c:/xampp/htdocs/PHP/fonts/NotoSansTC-Medium.otf",$randStr);
    //$authcode .= $randStr;
    }



//imagettftext($img , 36,0,0,100 ,$yellow,"c:/xampp/htdocs/PHP/fonts/NotoSansTC-Medium.otf","hello,world");
header("Content-type: image/jpeg");
imagejpeg($img);
ImageDestroy($img);



?>