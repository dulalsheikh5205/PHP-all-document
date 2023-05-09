<?php 

class Human
{
	protected $genders = array("male","female","others");

	protected function getFeatures($gender)
	{
		if($gender=='male')
		{
			echo "Men will be men";
		}

		else if($gender=='female')
		{
			echo "Women's mind is a maze";
		}
		else if($gender=='other')
		{
			echo "All are born equal";
		}
	}
}

class Male extends Human
{
	protected $gender="female";
	public function getMaleFeature()
	{
		$this->getFeatures($this->gender);
	}
}

$human = new Human();
$male = new Male();

$male->getMaleFeature();

echo $human->genders;
$human->getFeatures("male");
echo $male->gender;


?>