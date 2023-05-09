<?php 

interface WebApp
{
	public function login($email, $password);
	public function register($email, $password, $username);
	public function logout();
}

class Myclass implements WebApp
{
	public function login($email, $password)
	{
		echo "Logged in with user using".$email;
	}

	public function register($email, $password, $username)
	{
		echo "User registration successfull with".$email."and Username".$username."<br>";
	}
	public function logout()
	{
		echo "User logged out!";
	}
}

$user = new Myclass();
$user->register("araman666@gmail.com","password","araman");
$user->login("araman666@gmail.com","password");

/* 
output:
User registration successfull witharaman666@gmail.comand Usernamearaman
Logged in with user usingaraman666@gmail.com
*/


?>