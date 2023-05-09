<?php
  class ClassRoom{
    //property
    public $projector = 'tosiba';

    function onGoingClass(){
        echo "our projector is {$this->projector}";
    }

  }    
  
  $class = new ClassRoom();
 $class->projector = 'sonic';
//  echo $class->projector;
 echo $class->onGoingClass();

 $web = new ClassRoom();
 echo "<br>";
 echo $class->projector;
 echo "<br>";
 $web->onGoingClass();

 /* 
 output:
 our projector is sonic
sonic
our projector is tosiba
 */
?>