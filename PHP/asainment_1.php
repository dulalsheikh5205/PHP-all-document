<?php  

$num = 0;
// Using if statement for ternary operator
if ($num > 0) {
$result = 'positive';
}
if ($num < 0 ){
$result = 'negative';
if( $num < -10) {
$result = 'value is below -10';
}
}
else {
$result = 'its zero';
}

// echo $result;

// using ternary operator shorthand above of if else statement
$res = $num > 0 ?'positive':($num < 0 ? ($num < -10 ? 'value is below -10':'negative'):'it\'s zero');

echo $res;


?>



