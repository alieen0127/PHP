<?php
$dsn = "mysql:host=locathost;dbname=cy";
$opt = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAME utf8'
);

$pdo = new PDO($dsn, 'root','', $opt);

$result = $pdo->perpare('select * from product');
$result->execute();

while ( $product = $result->fetch(PDO::FETCH_OBJ)){
    echo $product = id
}
