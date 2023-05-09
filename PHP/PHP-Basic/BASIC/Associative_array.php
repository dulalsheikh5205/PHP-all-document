<?php 

$products = array("iPhone"=>"8.5","Samsung Galaxy"=>"6.0","OnePlus"=>"7.8","htc"=>"6.2");

	foreach ($products as $x => $x_value) 
	{
		echo "Product=".$x.",Rating=".$x_value;
		echo "<br>";
	}


/* 
output: 
Product=iPhone,Rating=8.5
Product=Samsung Galaxy,Rating=6.0
Product=OnePlus,Rating=7.8
Product=htc,Rating=6.2
*/
?>