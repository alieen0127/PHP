<?php
 if(!isset($_SESSION)){ session_start(); } //檢查SESSION是否啟動
 $_SESSION['check_word'] = ''; //設置存放檢查碼的SESSION
 //設置定義為圖片
 header("Content-type: image/PNG");
$nums=5; //生成驗證碼個數
$width=$nums*10;  //圖片寬
$high=20;  //圖片高  
//去除了數字0和1 字母小寫O和L，為了避免辨識不清楚
$str = "23456789abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMOPQRSTUBWXYZ";
$code = '';
for ($i = 0; $i < $nums; $i++) {
$code .= $str[mt_rand(0, strlen($str)-1)];
}

$_SESSION['check_word'] = $code;
//建立圖示，設置寬度及高度
$image = imagecreate($width, $high);
$image=imagecreatefromjpeg("upload/coffee2.jpg");
$black = imagecolorallocate($image, 0, 0, 0);  
$white = imagecolorallocate($image, 255, 255, 255);  //白色文字
//建立矩形底框(可省略)
//imagerectangle($image, 0, 0, $width-1, $high-1, $black);   
//imagestring (圖像資源,指定字型(1，2，3，4 ，5)，x坐標點,y坐標點,寫入的字串,文字顏色) 
imagettftext($image , 36,0,80,70 ,$white,"c:/xampp/htdocs/PHP/fonts/NotoSansTC-Medium.otf",$code);
//imagestring($image,5, 3, 3, $code, $white);
imagejpeg($image);
ImageDestroy($image);  
?>
 

