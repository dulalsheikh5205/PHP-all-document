<?php
  class Car{ // class like as boilerplate or blueprint, class can't execute only store in class


    function __construct(){ // magic function 
      echo "This is Construct function <br>";
    }
    // method
    function forwards($carName = "ToYoTa"){ // class মানে boilerplate, মানে কি কি ফাংশন থাকবে , না থাকবে সেটা store করে রাখা,
        echo "The car {$carName} is going forwards <br>";
    }

    function backwards($carName = "ToYoTa"){
        echo "The car {$carName} is going backwards <br>";
    }

    function __destruct(){ // magic function 
      echo "This is Destruct function";
    }

  }     
  
 $tesla = new Car(); // এরপর যখন আমাদের ফাংশন গুলা লাগবে, তখন, new keyword দিয়ে, instantiate করে নিব, তারপর store করে রাখা variable থেকে,class এর সব কিছু আমরা use করতে পারি,
//   var_dump($tesla);
// $tesla->forwards('tesla');
// $tesla->backwards('tesla');
$tesla->forwards();
$tesla->backwards();



$lamborgini = new Car();
$lamborgini->forwards('lamborgini');
$lamborgini->backwards('lamborgini');

/* 
output:
This is Construct function
The car ToYoTa is going forwards
The car ToYoTa is going backwards
This is Construct function
The car lamborgini is going forwards
The car lamborgini is going backwards
This is Destruct functionThis is Destruct function
*/

?> 

