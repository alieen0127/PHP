<?php
include_once 'bradutils1.php';
session_start();
$var1=new Student(90,87,50);
$sum=$var1->sum(); $avg =$var1->avg();
echo "Sum: {$sum} . Avg:{$avg}<br>";
//$var1=rand(1,100);
$_SESSION['var1']=$var1;
//$var1->setCh(9);
//$var1=200;
//$var1[2]=200;
?>
<a href='brad55.php?var1=<?php echo $var1; ?>'> NextPage </a>
