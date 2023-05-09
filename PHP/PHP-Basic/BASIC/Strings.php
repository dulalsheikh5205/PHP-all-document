<?php 

function Length($string)
{
	return strlen($string);
}

$mystring = "Dulal Sheikh";
echo Length($mystring);

echo "<br>";

echo str_word_count("Welcome to Us-Software");

echo "<br>";

echo strrev("Hello World!");

echo "<br>";

echo strpos("araman666@gmail.com", "@");
echo "<br>";

echo str_replace("BaseLtd.", "US-Software", "Welcome to BaseLtd.");


/* 
output:

12
3
!dlroW olleH
9
Welcome to US-Software

*/
?>