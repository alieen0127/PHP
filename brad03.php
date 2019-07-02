<?php

$var1 = 1; //$[a-zA-Z$_]$[a-zA-Z0-9$_]*
echo gettype($var1) . '<br>'; //型態
$var1 = 'kkk';
echo gettype($var1) . '<br>';
$var1 = ture;
echo gettype($var1) . '<br>';
$var1 = 12.3;
echo gettype($var1) . '<br>';

$var1 = 10; $var2 = 3;
$var3 = $var1 / $var2;
echo (int)$var3 . '<br>'; //強制轉型
$var4 = $var1 % $var2;
echo $var4 . '<br>';

$var5 = 012; //0- =>零開頭為八進位
echo $var5 . '<br>';
$var6 = 0x12; //
echo $var6 . '<br>';
$var7 = 10; 
$var8 = ++$var7;
$var9 = $var7++;
echo "{$var7} : {$var8} : {$var9}  <br>";