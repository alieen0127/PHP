<?php
$data = $_GET['data'];
foreach($data as $key => $value)
{
    $$key =$value;//$$key變數的變數
}
?>

<h2 