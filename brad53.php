
<?php

class Bike{
    //public  $speed = 0;
   // private $speed = 0;
   protected $speed =0;
   function upSpeed(){
       $this->speed = $this->speed<1 ? 1 : $this->speed*1.2;
   }
   function downSpeed(){
    $this->speed = $this->speed<1 ? 1 : $this->speed*0.7;
}
function getSpeed()
  {
      return $this->speed;
  }
}
class Scooter extends Bike{
    private $gear = 0;
    //Override
    //function upSpeed(){
    //    parent:: upSpeed();
        //$this->speed = $this->speed<1 ? 1 : $this->speed*2;

   // }
   function chGear($gear){$this->gear = $gear;}
    function upSpeedV2(){
        $this->speed = $this->speed<1 ? 2 : $this->speed*($this->gear*1.2);
    }

}

class person{
    private $myBike; //a bike object
    private $myScooter;
    private $myName;
    //以下為建構式 ->物件初始化程序
    function __construct(){
        $this->myBike =new Bike;
        $this->myScooter =new Scooter;
        $this->myName = $name;

    }
    function __destruct(){
        
    }
}

$b1 = new Bike;
$b2 = new Bike;
$s1 = new Scooter;

var_dump($s1);
$s1->upSpeed();
echo '<hr>';
echo $s1->getSpeed();
$s1->chGear(4);
echo $s1->getSpeed() .'<br>';

echo '<hr>';
$p1 = new Person;
var_dump($p1);
//echo $p1->getSpeed();

/*
$b1->upSpeed();$b1->upSpeed();$b1->upSpeed();$b1->upSpeed();
$b1->downSpeed();
$b2->upSpeed();$b2->upSpeed();
echo $b1->getSpeed();

echo $b1->speed . '<br>';
echo $b2->speed;
//var_dump($b1);*/