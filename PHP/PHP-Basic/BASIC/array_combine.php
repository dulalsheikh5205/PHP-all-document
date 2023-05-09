<?php 
$abbreviations = array("AL","AK","AZ","AR");

$states = array("Albama","Alaska","Arizona","Arkansas");

$sitemap = array_combine($abbreviations, $states);

print_r($sitemap);
/* 
output:
Array ( [AL] => Albama [AK] => Alaska [AZ] => Arizona [AR] => Arkansas )
*/
?>