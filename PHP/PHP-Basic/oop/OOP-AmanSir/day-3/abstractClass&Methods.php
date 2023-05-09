<?php 

abstract class Xyz
{
	function test()
	{
		echo "Hello...<br>";
	}

	abstract function absfunc();

}

class Abc extends Xyz
{
	function absfunc()
	{
		echo "Im from abstract method<br>";
	}
}

class Def extends Xyz
{
	function test2()
	{

	}

	function absfunc()
	{
		echo "Im from Def class";
	}
}

$a = new Abc();
$a->test();
$a->absfunc();
$b = new Def();
$b->absfunc();


/* 
output:
Hello...
Im from abstract method
Im from Def class
*/
?>