<?php 

// function recursive($num)
// {
// 	echo $num,'<br>';

// 	if($num < 50)
// 	{
// 		return recursive($num+1);
// 	}
// }

// $a = 1;
// recursive($a);


function recursive($num)
{
	echo $num,'<br>';

	if($num < 20)
	{
		return recursive($num+1);
	}
}

$a = 1;
recursive($a);

/* 
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
 */
?>