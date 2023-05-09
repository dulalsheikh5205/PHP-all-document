<?php 

$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2 = array("e"=>"red","f"=>"black","g"=>"purple","i"=>"red","j"=>"yellow");
$a3 = array("a"=>"red","b"=>"black","c"=>"yellow","d"=>"Golden","e"=>"Maroon");

$intersection = array_intersect($a1, $a2, $a3);

echo "<pre>";
print_r($intersection); // array_intersect এর মধ্যে প্রথম array কে  key ধরে এর সাথে common array check করবে, বাকি array
echo "</pre>";

/* 
output: 
Array
(
    [a] => red
    [d] => yellow
)
*/

?>