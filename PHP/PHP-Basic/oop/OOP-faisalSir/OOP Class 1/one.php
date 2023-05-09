<?php
  class Car{ // class like as boilerplate or blueprint, class can't execute only store in class

    // method
    function forwards($carName = "ToYoTa"){ // class মানে boilerplate, মানে কি কি ফাংশন থাকবে , না থাকবে সেটা store করে রাখা,
        echo "The car {$carName} is going forwards <br>";
    }

    function backwards($carName = "ToYoTa"){
        echo "The car {$carName} is going backwards <br>";
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
The car ToYoTa is going forwards
The car ToYoTa is going backwards
The car lamborgini is going forwards
The car lamborgini is going backwards
*/

?> 

