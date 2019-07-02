


<?php
$xy ='';
$x ='';
$y ='';
$op ='';
$result ='';
if (isset($_GET['x'])){
$x = $_GET['x']; $y = $_GET['y']; $op = $_GET['op']; 

if ($op== '1'){
    $result = $x + $y;
}else if($op== '2'){
    $result = $x - $y;
}else if($op== '3'){
    $result = $x * $y;
}else if($op== '4'){
    $xy = (int)($x / $y);
    $r2 = $x % $y;
    $result = "{$xy} ...... {$r2}";
}else

$result = "BUG";

//echo "{$x} + {$y} = {$xy}<br>" ;
//echo gettype($x) . '<br>';
}
?>


<form action="brad09.php"> <!--處理 -->
<input name="x" value="<?php echo $x; ?>"> <!--輸入變數 -->
<select name="op">
<option value="1" <?php if ($op=='1')  echo 'selected'; ?>>+</option>
<option value="2" <?php if ($op=='2')  echo 'selected'; ?>>-</option>
<option value="3" <?php if ($op=='3')  echo 'selected'; ?>>X</option>
<option value="4" <?php if ($op=='4')  echo 'selected'; ?>>/</option>
</select>

<input name=y value="<?php echo $y; ?>"> <!--輸入變數 -->
<input type="submit" value="=">
<?php

echo $result;
?>
</form>
