<?php 

class Customers
{
	public $name;
	public $age;

	private $accountNumber;
	private $balance;

	protected $dept;

	public function setAccountNumber($accnumber)
	{
		$this->accountNumber=$accnumber;
		echo "Account No is:".$this->accountNumber;
	}
}

$p1 = new Customers();
echo $p1->name = "Mr.Rahim<br>";
echo $p1->age = 45;
echo "<br>";
$p1->setAccountNumber(1001);
echo $p1->dept = "Admin";


/* 
output:
Mr.Rahim
45
Account No is:1001
Fatal error: Uncaught Error: Cannot access protected property Customers::$dept in C:\xampp\htdocs\OSTAD\PHP\PHP-Basic\oop\OOP-AmanSir\day-2\private_access.php:25 Stack trace: #0 {main} thrown in C:\xampp\htdocs\OSTAD\PHP\PHP-Basic\oop\OOP-AmanSir\day-2\private_access.php on line 25
*/
?>