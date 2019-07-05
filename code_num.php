<?php
  session_start();			\\開啟Session
  get_go(4,120,50);
  function get_go($num, $width, $height){
    $code ="";
    for($i = 0; $i<$num; $i++){
      $code .=rand(0,9);			\\隨機產生0～9
    }
  $_SESSION["captcha_num"] = $code;
  header('Content-Type: image/png');		\\設定回傳的資料類型
  \\$im = imagecreate($width,$height);				\\創建圖像
  $im = imagecreatetruecolor($width, $height);		\\創建真彩圖片
  $white = imagecolorallocate($im, 255, 255, 255);
  $yellow = imagecolorallocate($im, 255, 253, 13);
  $bgc =  imagecolorallocate($im, 0, 0, 0);
  
  imagefill($im, 0, 0, imagecolorallocate($im, 173, 32, 147));	\\填充矩形色彩
  imagerectangle($im, 0, 0, $width-1, $height-1, $yellow);	 \\矩形框線
  $style = array(
    $yellow,
    $yellow,
    $yellow,
    $yellow,
    $white,
    $white,
    $white,
    $white
  );
\\畫干擾線
  imagesetstyle($im, $style);
  $y1 = rand(0, $height);
  $y2 = rand(0, $height);
  $y3 = rand(0, $height);
  $y4 = rand(0, $height);
  $y5 = rand(0, $height);
  $y6 = rand(0, $height);
  imageline($im, 0, $y1, $width, $y3, IMG_COLOR_STYLED);
  imageline($im, 0, $y2, $width, $y4, IMG_COLOR_STYLED);
  imageline($im, 0, $y5, $width, $y6, IMG_COLOR_STYLED);
\\產生干擾點
  for($i=0; $i<80; $i++){
    imagesetpixel($im, rand(0, $width), rand(0, $height), $white);
  }
  $font = 'c:/xampp/htdocs/PHP/fonts/NotoSansTC-Medium.otf';				\\字型檔案
  for($i=0; $i<$num; $i++){
    $size = 25;
    $strpos = rand(1, 20);
    \\imagestring($image, $font, $x, $y, $string, $color);		\\另外一種圖像產生
    imagettftext($im, 30, $strpos, 15+$i*$size, 38, $white, $font, substr($code, $i ,1));
  }
//imagettftext（圖像, 字型大小, 角度, X軸, Y軸, 字體顏色, 字型檔案, "輸出什麼");
  imagepng($im);	\\以png方式輸出到瀏覽器
  imagedestroy($im);	\\銷毀圖像資源、釋放內存
}
 ?>

<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
<script type="text/javascript">
$(function(){
$("#getcode_num").click(function(){
  $(this).attr("src", "captcha/code_num.php");				\\刷新圖像
});
$("#chk_num").click(function(){
  var code_num = $("#code_num").val();						\\回傳變數
  
  \\以POST方式回傳使用者在輸入框輸入的值，如果得到msg為1，則輸入正確，否則失敗。
  $.post("captcha/chk_code.php?act=num",{code:code_num},function(msg){
    if(msg == 1){
      alert("驗證碼正確！");
    }else{
      alert("驗證碼錯誤！");
    }
  });
});
});
</script>