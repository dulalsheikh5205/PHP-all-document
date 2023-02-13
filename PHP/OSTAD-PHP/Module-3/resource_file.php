<?php

// ------------for loop---------------
/*

  for($n=1; $n <= 10; $n++)
  {
    echo "$n";
    echo PHP_EOL;
  }  
  
  */
/*
// ------------break statement---------------

  for($x = 0; $x < 10; $x++)
  {
    if($x == 4)
    {
        break;
    }
    echo "The number is: $x <br>";
  }

*/

/*

// ------------continue statement---------------

for($x = 0; $x < 10; $x++)
{
    if($x == 4)
    {
        continue;
    }
    echo "The number is: $x <br>";
}
*/
/*
// ------------foreach loop---------------

$season = array("summer","winter","autumn","rainy");
foreach($season as $element)
{
    echo $element;
    echo "<br>";
}
*/

/*
// ------------while loop---------------
$n = 1;
while($n <= 10)
{
    echo $n."<br>";
  $n++;
}
*/


/*
// ------------do while loop---------------
$n = 1;
do
{
    echo "$n<br>";
  $n++;
}
while($n <= 10);
*/


/*

function sayHello()
{
    echo "Hello PHP function";
}

sayHello();
*/


/*
function sayHello($name)
{
    echo "Hello $name<br>";
}

sayHello("dulal");
sayHello("jamal");
*/

/*

// ------------PHP function returning values---------------

function sum(int $x, int $y){
    $z = $x + $y;
    return $z;
}

echo sum(10,21);

*/

function add(int $num2, int $num3){
    $result1 = $num2 + $num3;
    $result2 = $num2 - $num3;

    return [
        'result1'=>$result1,
        'result2'=>$result2
    ];
};
$result = add(12,88);
echo $result['result1']; echo "<br>";



/*
// ------------recursive or recursion function---------------
function display($number){
    if($number<=5){
        echo "$number"; echo "<br>";;
        display($number+1); 
    }
}

display(1);
*/

?>