<?php
$n = 13;
$isPrime = true;
for ($i = 2; $i < $n; $i++){
    if ($n % $i ==0){
        $isPrime = false;
        break;
    }
}

echo $isPrime?"OK":"XX";