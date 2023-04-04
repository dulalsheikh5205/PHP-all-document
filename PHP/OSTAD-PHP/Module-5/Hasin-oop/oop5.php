<?php
  class Person{
    public $title;
    public $name;

    function __construct($titleName, $userName)
    {
        $this->title = $titleName;
        $this->name = $userName;
    }
    function whoAreYou(){
        echo "{$this->title} {$this->name}";
    }
  }    
  
  $object = new Person("Mr.","John Doe");
  $object->whoAreYou();
?>