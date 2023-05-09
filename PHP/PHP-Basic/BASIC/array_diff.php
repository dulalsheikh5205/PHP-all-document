<?php 

$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2 = array("e"=>"red","f"=>"black","g"=>"purple");
$a3 = array("a"=>"red","b"=>"black","c"=>"yellow");

$result = array_diff($a1,$a2,$a3); // array_diff() এর মধ্যে প্রথম array কে  key ধরে এর সাথে defference check করবে, বাকি array
echo "<pre>";
print_r($result);
echo "</pre>";

/* 
output: 

Array
(
    [b] => green
    [c] => blue
)
*/

?>