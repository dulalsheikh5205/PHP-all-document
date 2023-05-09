<?php 

$grades = array(55,"hello",42.6);
$total = array_sum($grades); // শুধু সংখা কে array_sum() কে যোগ করবে, বাকি অন্য data type skip করবে,
print $total;

/* 
output: 97.6
*/
?>