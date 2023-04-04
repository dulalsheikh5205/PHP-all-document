<?php
  class Vehicle{
    protected $speed;
    
    function move(){}
    function stop(){
        echo "stopped";
    }
    function start(){
        echo "started";
    }
  } 
  
  class Car extends Vehicle{
    function move(){
        echo "moving at 100kmh";
    }

    function start(){ // method override
        echo "Car started";
    }
  
  }

  class Cycle extends Vehicle{
    function move(){
        echo "moving at 15kmh";
    }

  }

  class Truck extends Vehicle{
    function move(){
        echo "moving at 60kmh";
    }

  }

  $c = new Car();
  $c->move();
  echo "<br>";
  $c->start();

//   echo "\n";
  echo "<br>";

  $t = new Truck();
  $t->move();
?>