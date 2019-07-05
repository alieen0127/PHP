<meta charset="utf-8">
<?php
if(!isset($_SESSION)){ session_start();}  //判斷session是否已啟動
if($_SESSION['check_word'] == $_POST['checkword']){         
$_SESSION['check_word'] = ''; //比對正確後，清空或寫入下一動作代碼               
echo '輸入正確，將於一秒後跳轉';
echo '<meta http-equiv="refresh" content="1;URL=index.html">';
exit();
 }else{
echo 'Error輸入錯誤，將於一秒後跳轉';
echo '<meta http-equiv="refresh" content="1;URL=index.html">';
 }
?>