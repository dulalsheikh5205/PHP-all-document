<?php 

$states = array("New Jersey","Alaska","Arizona","Arkansas","Delwere","Pennsylvenia","Albama");

arsort($states);
// sort($states);
// ksort($states);
// rsort($states);

echo "<pre>";
print_r($states);
echo "</pre>";

/* 
output: 
Array
(
    [5] => Pennsylvenia
    [0] => New Jersey
    [4] => Delwere
    [3] => Arkansas
    [2] => Arizona
    [6] => Albama
    [1] => Alaska
)

*/

?>