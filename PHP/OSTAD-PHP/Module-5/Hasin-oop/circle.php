<?php


    interface shape{
        function getArea();
    }

  class Circle implements shape{
    public $radis;
    const PI = 3.14;
    function __construct( $radis)
    {
        $this->radis = $radis;
    }
    function getArea(){
        return self::PI * $this->radis * $this->radis;
    }
  }    
  
  $c = new Circle(4);
  $area = $c->getArea();
  echo $area;
?>