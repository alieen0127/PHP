


<?php
$xy ='';
$x ='';
$y ='';
$result ='';
if (isset($_GET['x'])){
$x = $_GET['x']; $y = $_GET['y'];
$xy =  (int)($x / $y);
$r2 = $x % $y;
$result = "{$xy} ...... {$r2}";

//echo "{$x} + {$y} = {$xy}<br>" ;
//echo gettype($x) . '<br>';
}
?>


<form action="brad05.php"> <!--處理 -->
<input name="x" value="<?php echo $x; ?>"> <!--輸入變數 -->
/
<input name=y value="<?php echo $y; ?>"> <!--輸入變數 -->
<input type="submit" value="=">
<?php

echo $result;
?>
</form>
