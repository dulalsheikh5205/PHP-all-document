<?php
  interface TwoDShape{
    function getArea();
  }
  interface ThreeDShape{
    function getVolume();
  }
  class Rectangle implements Shape{
    function getArea(){

    }
}

class Cube implements TwoDShape, ThreeDShape{
    function getArea(){

    }
    function getVolume(){
        
    }

}

class Circle implements Shape{
    function getArea(){

    }
}

class Triangle implements Shape{
    function getArea(){

    }
}
  


?>