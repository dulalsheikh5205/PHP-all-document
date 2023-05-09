<?php 

abstract class Car
{
	protected $tankVolume;

	public function setTankVolume($volume)
		{
			$this->tankVolume = $volume;
		}

//Abstract Method

	abstract function calcNumMilesonFueltank();
}

class Honda extends Car
{
	public function calcNumMilesonFueltank()
	{
		$miles = $this->tankVolume*30;
		return $miles;
	}
}

class Toyota extends Car
{
	public function calcNumMilesonFueltank()
	{
		return $miles = $this->tankVolume*33;
	}

	public function getColor()
	{
		return "Blue";
	}
}

$toyota = new Toyota();
$toyota->setTankVolume(10);
echo $toyota->calcNumMilesonFueltank();
echo $toyota->getColor();

$honda = new Honda();
$honda->setTankVolume(5);
echo $honda->calcNumMilesonFueltank();





/* 
output:
330Blue150
*/



?>