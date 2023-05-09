  <?php 

$arr = array("araman","40","Trainer","Mohammodpur");

// echo $arr[2];
/* 
output: Trainer
*/

// echo "<pre>";
// print_r($arr);
// echo "</pre>";

// /* 
// Array
// (
//     [0] => araman
//     [1] => 40
//     [2] => Trainer
//     [3] => Mohammodpur
// )
// */



// var_dump($arr);
// output:array(4) { [0]=> string(6) "araman" [1]=> string(2) "40" [2]=> string(7) "Trainer" [3]=> string(11) "Mohammodpur" }

/*
	echo "<ul>";
	for($i=0; $i<=3; $i++)
	{
		echo "<li>";
		echo $arr[$i];
		echo "</li>";
	}

	echo "</ul>";
	output: araman
			40
			Trainer
			Mohammodpur

			*/

/*
if(in_array(40, $arr, true))
{
	echo "Found Successfully";
}
else
{
	echo "Nothing Found";
}
output: Nothing Found
*/


echo array_search("Trainer",$arr); 
output: 2


// list($a, $b, $c, $d)=$arr;
// echo "Details Information of the employee are: $a, $b, $c, and $d.";
/* 
output: Details Information of the employee are: araman, 40, Trainer, and Mohammodpur.
*/

?>