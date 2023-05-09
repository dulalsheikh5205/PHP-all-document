<?php 

$books = array(

				array(

						"name"=>"Web Publishing",
						"edition"=>"2nd",
						"price"=>"BDT 300"
				),

				array(

						"name"=>"Linux Networking",
						"edition"=>"3rd",
						"price"=>"BDT 450"
				),

				array(

						"name"=>"Expert Networking",
						"edition"=>"2nd",
						"price"=>"BDT 400"
				),

				array(

						"name"=>"Programming with C#",
						"edition"=>"4th",
						"price"=>"BDT 750"
				),

				array(

						"name"=>"Laravel 7",
						"edition"=>"1st",
						"price"=>"BDT 680"
				)
			);				 // ভেতরের information $key_$value pair এ দেওয়া আছে, ভেতরের information বের করতে হলে , ভেতরে আরেক টা loop চালাতে হবে,
							// $books মানে main array name , যেখানে সব গুলা array() store আছে,
foreach ($books as $vals)  // $vals মানে সব গুলা array() কে বুঝায়,
{
	foreach($vals as $key=>$final_val) // $key মানে index name 'name','edition','price'
	{									// $final_val মানে index value 'Laravel 7','1st','BDT 680'				
		print "$key: $final_val<br>"; 
	}

	print "<br>";
}
/* output:

name: Web Publishing
edition: 2nd
price: BDT 300

name: Linux Networking
edition: 3rd
price: BDT 450

name: Expert Networking
edition: 2nd
price: BDT 400

name: Programming with C#
edition: 4th
price: BDT 750

name: Laravel 7
edition: 1st
price: BDT 680


*/
?>