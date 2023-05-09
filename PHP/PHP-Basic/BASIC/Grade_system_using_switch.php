<?php 

$mark = 78;

switch($mark)
{
	case $mark >=80:
	echo "Grade is A";
	break;

	case $mark >=70:
	echo "Grade is B";
	break;

	case $mark >=60:
	echo "Grade is C";
	break;

	case $mark >=50:
	echo "Grade is D";
	break;

	default:
	echo "Greade is F";
}

/* output: Grade is B */
?>