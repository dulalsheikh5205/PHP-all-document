<?php 

function addFive($num)
{
	$num+=5;
}

function addSix(&$num)
{
	$num+=6;
}

$origNum=10;

addFive($origNum);
echo "Original value is $origNum<br>";

addSix($origNum);
echo "Original value is $origNum<br>";

  /* 
  output:
 Original value is 10
Original value is 16 
 
  */
?>