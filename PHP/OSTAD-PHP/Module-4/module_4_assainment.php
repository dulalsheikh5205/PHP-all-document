<?php
  
/*=======================================
Question:  1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)?
======================================= */
function sortingByLength($arr) {
    usort($arr, function($a, $b) {
      return strlen($a) - strlen($b);
    });
    return $arr;
  }

  $fruits = array("apple", "banana", "orange", "pineapple", "kiwi");
  $sorted = sortingByLength($fruits);
  print_r($sorted);
  

  echo "<br>";

/*=======================================  
Question: 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
======================================= */
function concatTwoString( string $firstStr, string $secondStr ): string {
    return $firstStr .= $secondStr;
}
echo concatTwoString( "Hello", "World!" );

echo "\n\n";

echo "<br>";


/*=======================================
Question: 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.?
======================================= */

function removeFirstAndLastElement( array $array ): array
{
    return array_slice( $array, 1, -1 );
}
$peoples = array( 'Dulal', 'Jamal', 'Rubel', 'Sabbir', 'Nazim', 'Helal', "Ainal" );
print_r( removeFirstAndLastElement( $peoples ) );

echo "\n\n";



echo "<br>";


/*=======================================
Question: 4.Write a PHP function to check if a string contains only letters and whitespace?
======================================= */
function validationCheck($string){
    if(!preg_match("/^[a-zA-Z\s]+$/",$string)){
        return $errors[] = "Name must only contain letters!";
    }
    else{
        return "valid input";
    }
}

$string = "hello web developer";
echo validationCheck($string);

// output: valid input
    

  echo "<br>";


/*=======================================
Question: 5.Write a PHP function to find the second largest number in an array of numbers.?
======================================= */
function largestSecondNumber( array $number ): int {
    rsort( $number );
    return $number[1];
}
$number = array( 2, 4, 88, 7, 34, 100 );
echo "The largest second number is " . largestSecondNumber( $number );

   
?>