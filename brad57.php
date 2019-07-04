<?php

$mysqli =new mysqli('localhost','root','','cy');
//var_dump($mysqli);
//echo $mysqli->connect_errno;
$mysqli->set_charset('utf8');

//$sql ='INSERT INTO cust (cname,tel,birthday) VALUES ("brad","123","1999-01-02")';
//$sql .=',("cy1","123","1999-01-02")';
//$sql .=',("cy2","123","1999-01-02")';
//$sql ='UPDATE cust set cname = "Tony" where id = 3';
//$sql ='delete from cust where id =2';
$cname = 'kevin';
$tel = '0912-3456';
$birthday = '1999-01-01';
$sql = 'INSERT INTO cust (cname,tel,birthday) VALUES (?,?,?)';
$stmt=$mysqli->prepare($sql);
$stmt->bind_param('sss',$cname,$tel,$birthday); //sss=欄位型別幾個值給幾個
$stmt->execute();
echo $stmt->affected_rows;
echo $mysqli->error;
?>