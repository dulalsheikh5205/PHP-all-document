<?php 

$fruits = array(

				"fruits"=>array("a"=>"orange",
								"b"=>"banana",
								"c"=>"apple"),

				"numbers"=>array(1,2,3,4,5,6),

				"holes"=>array(

									"first",
								5 => "second",
									 "third"	
				)

);

echo $fruits["holes"][5]."<br>";
echo $fruits["fruits"]["a"]."<br>";
echo $fruits["holes"][0]."<br>";
echo $fruits["fruits"]["b"];

unset($fruits["holes"][0]);
echo $fruits["holes"][0];


/* 
output:

second
orange
first
banana
Notice: Undefined offset: 0 in C:\xampp\htdocs\OSTAD\PHP\PHP-Basic\BASIC\Multidimention_array_ex.php on line 26
*/
?>