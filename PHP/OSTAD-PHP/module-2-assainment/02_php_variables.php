<?php

/** ========================== PHP variables =======================  */

/*
PHP variables:
variables are containers for storing information.
A variable can have a short name (like x and y) or a more descriptive name (age,fathername,motherName,birthDate22, CarName, total_volume).

Rules for PHP variables:
    
=> A variable starts with the $ sign, followed by the name of the variable
=> A variable name must start with a letter or the underscore character
=> A variable name cannot start with a number
=> A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
=> Variable names are case-sensitive ($age and $AGE are two different variables)
*/

//variable define
$name = "Dulal";
//camelCase variable
$firstName = "Md. Dulal";
//TitleCase variable
$LastName = "Sheikh";
//variable with underscore
$full_name = "Md. Dulal Sheikh";

$age = 28;
$question = "How are you?";

echo "Hello {$name}, {$question}\n";



 /** ==========================End PHP variables =======================  */

?>