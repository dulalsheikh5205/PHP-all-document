<?php 

$states = array("Albama","Alaska","Arizona","Arkansas","Dallas");
$slice = array_slice($states, 1,3);
print_r($slice);

/* 
output:
Array ( [0] => Alaska [1] => Arizona [2] => Arkansas ) // will cut from 1 index থেকে ৩ টা উপাদান কেটে নিবে ১ index er por
*/
?>