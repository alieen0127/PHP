<?php
date_default_timezone_set('Asia/Taipei');
$mydir='.';
$fp =@opendir($mydir) or exit('server Busy');
// =var_dump($fp);
//$str= readdir($fp);
//echo $str . '<br>';

while ($file = readdir($fp)){
    $len= filesize("{$mydir}/{$file}");
    $ctime=filemtime("{$mydir}/{$file}");
    $ntime = date('Y-m-d H:i:s',$ctime);
    echo "{$file} : {$len} : {$ntime} <br>";
}
//if (unlink("./test1.html")){
//    echo 'delete OK';
//}

?>