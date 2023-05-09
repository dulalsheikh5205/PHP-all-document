<?php 

function employees($value,$key,$p)
{
	echo "$key $p $value<br>";
}

$emp = ["hasan","Jubayer","Khalid","Komol","Rana"];
array_walk($emp,"employees","has the value"); // arrary_walk এর key value গুলা function এর কাছে পাঠায়, function এটা প্রিন্ট হয়,

/* 
output:
0 has the value hasan
1 has the value Jubayer
2 has the value Khalid
3 has the value Komol
4 has the value Rana
*/
?>