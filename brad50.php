<?php

$img = imagecreatefromjpeg("upload/coffee.jpg");
$yellow = ImageColorallocate($img , 255,255,0);
imagettftext($img , 36,rand(-30,30),0,100 ,$yellow,"c:/xampp/htdocs/PHP/fonts/NotoSansTC-Medium.otf","hello,world");
header("Content-type: image/jpeg");
imagejpeg($img);
ImageDestroy($img);




?>