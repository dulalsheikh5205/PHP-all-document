<?php 
echo md5("araman777");//Supports 32bit encryption. Not safe at present.
// output: 8662cb776db4b1e0d9e6b94240b40f60
echo "<br>";

if(is_numeric(555))
{
	echo "True";
}

else
{
	echo "False";
}

// output: True
echo "<br>";

echo number_format(25025478541);
// output:25,025,478,541

echo "<br>";

echo substr(md5(rand(2,10)),2,5); // substr() for 
// output:da3b7
echo "<br>";
echo sqrt(100);
// output:10
echo "<br>";
echo pi();
// output: 3.1415926535898
echo "<br>";
$password = "secret";
$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash;
// output:$2y$10$vtkZGfzI5oy5RJQxuIO2I.SgZOjhHZ6TM8S8XdhXiskxDzlXAznXu

?>