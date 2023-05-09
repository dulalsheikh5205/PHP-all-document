<?php

use Human as GlobalHuman;

   class Human{
    private $eyes = 'duita';

    // public function walk(){
    //     echo "I can walk";
    // }
    protected function walk(){
        echo "I can walk";
    }
    public function emotion(){
        echo "I have emotions";
    }
   }    
   
   class Robot extends GlobalHuman{
        public function run(){
             echo "I can run";
        }
        public function iCanDo(){
            return $this->walk().$this->emotion().$this->run() ;
        }
   }

   $sofia = new Robot();
//    $sofia->walk();
//    $sofia->run();
   $sofia->iCanDo();

   $shourab = new Human();
   $shourab->walk();
?>