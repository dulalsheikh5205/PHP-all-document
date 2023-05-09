<?php 

trait Subscriber
{
	function subscriberLogin()
	{
		echo "you are logged in as subscriber<br>";
	}
}
trait Contributor
{
	function contributorLogin()
	{
		echo "you are logged in as contributor<br>";
	}
}
trait Author
{
	function authorLogin()
	{
		echo "you are logged in as author<br>";
	}
}
trait Administrator
{
	function administratorLogin()
	{
		echo "you are logged in as administrator<br>";
	}
}

class Member
{
	use Subscriber;
	use Contributor;
	use Author;
	use Administrator;

	public function run()
	{
		$this->subscriberLogin();
		$this->contributorLogin();
		$this->authorLogin();
		$this->administratorLogin();

		echo "All Members login has done!<br>";
	}

}

$mylogin = new Member();
$mylogin->run();

/* 
output:
you are logged in as subscriber
you are logged in as contributor
you are logged in as author
you are logged in as administrator
All Members login has done!

*/

?>