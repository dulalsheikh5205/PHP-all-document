<?php 

class MobilePhones
{
	protected $price;
	public $title;

	//Setter method

	function setPrice($mob){
		$this->price = $mob;
	}

	//Getter Method
	function getPrice(){
		echo $this->price."</br>";
	}

	function setName($mob){
		$this->title = $mob;
	}
	function getName(){
		echo $this->title." ";
	}

	
}

$samsung = new MobilePhones();
$iphone = new MobilePhones();

$samsung->setName("samsung s9");
echo $samsung->setPrice(75000);

$iphone->setName("iPhone 12 pro");
echo $iphone->setPrice(90000);

$samsung->getName();
$samsung->getPrice();

$iphone->getName();
$iphone->getPrice();

/* 
output:
samsung s9 75000
iPhone 12 pro 90000
*/


?>

<!-- another one 
mobile_class.php
-->

<?php 

class MobilePhone
{
	protected $price;
	public $title;

	//Setter method

	//Getter Method

	
}

$samsung = new MobilePhone();
$xiomi = new MobilePhone();
$iphone = new MobilePhone();

echo $samsung->price = 90000;


/* 
output:
Fatal error: Uncaught Error: Cannot access protected property MobilePhone::$price in C:\xampp\htdocs\OSTAD\PHP\PHP-Basic\oop\OOP-AmanSir\day-2\setter_method_getter_method.php:75 Stack trace: #0 {main} thrown in C:\xampp\htdocs\OSTAD\PHP\PHP-Basic\oop\OOP-AmanSir\day-2\setter_method_getter_method.php on line 75
*/


?>		
