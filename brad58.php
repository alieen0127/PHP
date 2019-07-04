<?php

$mysqli =new mysqli('localhost','root','','cy');
$mysqli->set_charset('utf8');

$sql ='select * from cust ';
$stmt =$mysqli->prepare($sql);
$stmt->execute();
$stmt->store_result();
echo $stmt->num_rows . '<hr>';
$stmt->bind_result($id,$cname,$tel,$birthday);

//json物件
$ret = new stdClass; //Object()
if ($stmt->num_rows >0 ){
    $ret->result = $stmt->num_rows; 
$row =[];


//$stmt->fetch();
while($stmt->fetch()){
    //echo "{$id} :{$cname} : {$tel} : {$birthday}<br>";
    $row['id'] =$id;
    $row['cname'] =$cname;
    $row['tel'] =$tel;
    $row['birthday'] =$birthday;
    $ret->date[] = $row; 
    }

}else{
    $ret->result = 'no data';
}

$stmt->free_result();
$stmt->close();
echo json_encode($ret);

//{key:value}=> object 

//echo "{$id} :{$cname} : {$tel} : {$birthday}<br>";