<?php 
$arr = array("Kamal","Jamal","Rashed","Moni","Hasan");

//$arr2 = array("Tanvir","Sagor");

array_splice($arr,1,0,"tanvir"); // 1 নাম্বার উপাদান এ একটা যোগ হবে,

print_r($arr);
echo "<br>";

$arr2 =  array("Kalu","Jalu","salu","Malu","nalu");
$splice = array_splice($arr2,2); // 2 নাম্বার উপাদান থেকে সব কেটে নিবে,
print_r($splice);
/* 
output:
Array ( [0] => Kamal [1] => tanvir [2] => Jamal [3] => Rashed [4] => Moni [5] => Hasan )
Array ( [0] => salu [1] => Malu [2] => nalu ) 
*/

?>