<?php 

$products = array("Ram","Motherboard","Ram","Mouse","Keyboard","Motherboard","Processor","Graphic Card");

$uniqueproducts = array_unique($products);
print_r($uniqueproducts);

/* 
output: Array ( [0] => Ram [1] => Motherboard [3] => Mouse [4] => Keyboard [6] => Processor [7] => Graphic Card )
*/
?>