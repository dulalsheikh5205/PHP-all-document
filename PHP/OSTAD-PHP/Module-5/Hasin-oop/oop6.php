<?php 
// singleTonPattern
class Payment{

    static $instance;

  public static  function getInstance(){
        if(self::$instance===null){
            self::$instance = new Payment();
        }
        return self::$instance;
    }
   function processPayment(){
    echo "Payment process";
   } 
}

// $p1 = new Payment();
// $p1->processPayment();

// $p2 = new Payment();
// $p2->processPayment();

$p1 = Payment::getInstance();
$p1->processPayment();

$p2 = Payment::getInstance();
$p2->processPayment();



?>