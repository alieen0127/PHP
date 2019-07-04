<?php

$dstW = 240; $dstH = 240;
$src =ImageCreateFromJpeg("upload/w2.jpg");
$srcW = ImageSX($src); $srcH = ImageSY($src);

if($srcW >$srcH){
    //W-type
    $dstX = $dstW;
    $dstY = $dstH * $srcH / $srcW; 
}else{
    //h-type
    $dstY = $dstH;
    $dstX = $dstW * $srcW / $srcH; 
}


$dst =ImageCreate($dstW, $dstH);

imagecopyresampled ($dst, $src,
0,0,
0,0,
$dstX,$dstY,
$srcW,$srcH);

/*ImagecopyResize ($dst, $src,
0,0,
0,0,
$dstX,$dstY,
$srcW,$srcH);*/

header("Content-type : image/jpeg");
imageJpeg($dst);

ImageDrstroy($src);
ImageDrstroy($dst);



?>

