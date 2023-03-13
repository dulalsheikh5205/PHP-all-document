<?php
/*
Mixing a PHP variable with a string literals
*/
$firstName = "Dulal";
$lastName = "Sheikh";
$age = 28;

echo "My firstname is".$firstName;  //output = My firstname is Dulal
echo "\n";

echo "My age is ".$age;  //output = My age is 28
echo "\n";

echo "My lastname is "." ".$lastName;  //output = My lastname is Sheikh
echo "\n";

// Variable values do not show output  in string when using single quotation.

echo 'My name is $firstName';  //output = My firstname is $firstName
echo "\n";

//Variables values could  be shown output in string when  using it  double quotation.
echo "My name is $firstName";  //output = My firstname is Dulal
echo "\n";

//use curly brackets in php string literal
$var = "way";
echo "Two {$var} to define a variable in a string.";    //output = Two way to define a variable in a string.
echo "\n";
echo "Two {$var}s to define a variable in a string.";   //output = Two ways to define a variable in a string.
echo "\n";

echo "My full name is {$firstName} {$lastName}";    //output = My full name is Dulal Sheikh