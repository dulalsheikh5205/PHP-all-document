<?php 

$priceOfBeef = 200;

$decision = ($priceOfBeef == 150)?"Buy 2kg beef":"Dont buy beef";
echo $decision."<br>";

$foo = 5;
$bar = ($foo==1)?"1":(($foo==2)?"2":"Other values");
echo $bar;


?>