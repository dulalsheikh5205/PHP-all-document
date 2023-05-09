<?php 

	$a = 1; // global variable
	$b = 2; // global variable

	function sum()
	{
		global $a, $b; // local variable
		$b = $a+$b; // local variable
	}

	sum();
	echo  $b;

	/* 
	output: 3
	*/
?>


