<?php 

class One
{
	public function output($param)
	{
		echo "\n Parent Class-The parameter value is $param<br>";
	}
}

class Two extends One
{
	public function output($param)
	{
		echo "\n Child Class-The parameter value is $param";
	}
}

$obj1 = new One;
$obj2 = new Two;

$obj1->output("This is a post of parent");
$obj2->output("This post tells about child");

/* 
output:
Parent Class-The parameter value is This is a post of parent
Child Class-The parameter value is This post tells about child
*/

?>