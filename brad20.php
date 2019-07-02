$a=$b=$c=$d=$e=$f=0;
for($i=1;$i<=100;$i++){
    $k=rand(1,6);
    if($k=1)
    {
        $a++;
        

    }else if($k=2)
    {
        $b++;
    }else if($k=3)
    {
        $c++;
    }else if($k=4)
    {
        $d++;
    }else if($k=5)
    {
        $e++;
    }else if($k=6)
    {
        $f++;
    }

}

echo "1點出現{$a}次<br>";
echo "2點出現{$a}次<br>";
echo "3點出現{$a}次<br>";
echo "4點出現{$a}次<br>";
echo "5點出現{$a}次<br>";
echo "6點出現{$a}次<br>";


?>