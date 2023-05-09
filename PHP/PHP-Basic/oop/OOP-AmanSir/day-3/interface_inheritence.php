<?php 

interface my_print
{
	public function printData();
}

interface select 
{
	public function getData();
}

interface myInterface extends my_print, select
{
	public function addData();
}

class Myclass implements myInterface
{
	public function printData()
	{
		echo "This method will print data";
	}

	public function getData()
	{
		echo "This method can read data";
	}

	public function addData()
	{
		echo "This method add data";
	}

}

$obj = new Myclass();
$obj->printData();
$obj->addData();

/* 
This method will print dataThis method add data
*/

?>