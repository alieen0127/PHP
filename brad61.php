<?php
spl_autoload_register(function($class_name){
    
require_once "{$class_name}.php";

} );
//include_once 'MyClass.php';
//include_once 'MyClass2.php';
$obj1 =new MyClass;
$obj2 =new MyClass2;
$obj1->showMe();
$obj2->showMe();

$c1 =new Cart;
$c1->addProduct('P001',30);
$c1->addProduct('P002',366);
$myList = $c1->getList();
var_dump($myList);

?>
