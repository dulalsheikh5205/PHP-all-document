<?php 
include_once('class_person.php');


$baby = new Person;
$baby->name= "Mr.Baby";
$baby->weight = 28;

echo $baby->name."weights".$baby->weight."kg\n"."<br>";

$baby->eat("Burger",500);
$baby->eat("cashew Nut",500);

echo $baby->name."now weights".$baby->weight."kg\n"."<br>";

/* 
output:

Mr.Babyweights28kg
Mr.Babyis eatingBurgerwith500calorie
Mr.Babyis eatingcashew Nutwith500calorie
Mr.Babynow weights29kg
Mr.Babyis idle now. His current age is7years and now he weights29kg.
*/

?>