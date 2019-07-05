<?php
$data = $_GET['data'];
foreach($data as $key => $value)
{
    $$key =$value;//$$key變數的變數
}
?>


<h1><?php echo $title; ?> </h1>
<hr />
hello,<?php echo $who; ?>
<hr />
apple .
