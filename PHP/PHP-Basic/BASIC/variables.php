<?php 

$a = "This is string";
$b = 5;

echo $a."   ".$b;
// output: This is string 5

echo "<p>This is a paragraph</p>";	// output: This is a paragraph

		// $x = "String5value";
		// $y = 25;
		// $z = $x + $y;
		// echo $z; output: 25
        

        $x = "5StringValue";
		$y = 25;
		$z = $x + $y;
		echo $z;

       /*  output: Notice: A non well formed numeric value encountered in C:\xampp\htdocs\OSTAD\PHP\PHP-Basic\variables.php on line 17
30 */

		echo "<br>";

		$number = 5;
		$sum = 15+$number;
		$sum = "twenty";
		echo $sum;

        /* output: twenty */
		echo "<br>";

		$total = 5;
		$count = "10";
		$total+=$count; //Type Juggeling
		print $total;
        /* output: 15 */
		echo "<br>";


        date_default_timezone_set("Asia/Dhaka");
        echo date("F, d, Y h:i:sa"); echo "<br>"; /* (F তে format) ("d" তে  date like 09) ("D" তে  day like Tue) ( "Y" তে year like 2023)("y" তে year like 23)("l" তে  day name full like Tuesday)(h:i:sa তে hour minute secondতে) */
        /* output: May, 09, 2023 08:09:30am */
        echo date("F, d, y h:i:sa"); echo "<br>";
        /* output: May, 09, 23 08:09:30am */
        echo date("F, d, y, l h:i:sa"); echo "<br>";
        /* output: May, 09, 23, Tuesday 08:09:30am */
		echo date("F,d,D,Y");
        /* output: May,09,Tue,2023 */

		echo "<br>";

		printf("%d Mobile phones cost is $%.2f",100,50.2);/* ("f বলতে format বুঝায়,")(% "d" তে decimal number মানে কোন ভগ্নাংশ না মানে শুধু নাম্বার)($"%.2f" তে f মানে floting point number, 2 মানে দশমিক এর পর দুই ঘর নিবে)(",100,50.2" মানে 100 যাবে প্রথম % এর জায়গায়, আর 50.2 যাবে ২য় % এর জায়গায়, কমা দিয়ে separate করা হয়েছে)*/
        /* output: 100 Mobile phones cost is $50.20 */
        echo "<br>";
        printf("%d Mobile phones cost is TK %.2f",100,50.2);
        /* output: 100 Mobile phones cost is TK 50.20 */


    ?>
