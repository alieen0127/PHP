<?php

sayYa(); sayYa();
function sayYa(){
    echo 'Ya<br>';
}
echo '<hr>';

sayHello('brad');
function sayHello($name){
    echo "hellp , {$name}<br>";
}
sayHelloV2(2);
sayHelloV2('brad');
function sayHelloV2($n = 1,$name= 'World'){
    for($i=0;$i<$n;$i++){
    echo "hellp , {$name}<br>";
    }
}
echo '<hr>';
sayHelloV3();
function sayHelloV3($names= 'World'){
    if(is_array($names)){
    foreach($names as $name){
    echo "hello , {$name}<br>";
    }
}
    else{
        echo "hello , {$names}<br>";
    }
}

echo '<hr>';
sayHelloV4();
sayHelloV4('hello');

function sayHelloV4(){
 $names=func_get_args();

 foreach($names as $name){
    echo "hello , {$name}<br>";
    }

}