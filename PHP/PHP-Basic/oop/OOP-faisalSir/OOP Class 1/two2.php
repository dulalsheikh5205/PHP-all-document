<?php
  class ClassRoom{

    function __construct($userClassLink,$userClassVideo = 'videoo'){
     $this->classLink = $userClassLink;
     $this->classVideo = $userClassVideo;
    }
    //property
    public $projector = 'tosiba';
    private $classLink = 'meet';
    private $classVideo = 'video link';

    function onGoingClass(){
        echo "our projector is {$this->projector}";
    }

    public function joinClass(){
      echo $this->classLink;
      echo $this->classVideo;
    }

  }    
  
  $class = new ClassRoom('meet');
  $class->joinClass();

 $web = new ClassRoom('zoom','storage link ');
 echo "<br>";
//  echo $class->projector;
 echo "<br>";
//  $web->onGoingClass();
 $web->joinClass();

 /* 
 output:
 meetvideoo

zoomstorage link
 */
?>