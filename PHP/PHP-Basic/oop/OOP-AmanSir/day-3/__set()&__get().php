<?php 
class Login
{
	public function __set($property, $value)
	{
		if($value == true)
		{
			$this->property=$value;
		}

		else
		{
			echo "Email Id is not provided!";
		}
	}

	public function __get($property)
	{
		return "Login successfull with email ID:".$this->property;
	}
}

$user1 = new Login;
$user1->email="araman666@gmail.com";
echo $user1->email;

?>