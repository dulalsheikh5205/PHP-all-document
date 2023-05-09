<?php 

$string = "PHP is the web scripting language of choice";

$exp = preg_match("/PHP/",$string);

if($exp)
{
	echo "A match was found"."<br>";
}

else
{
	echo "A match was not found"."<br>";
}
/* 
output:A match was found

*/
	/*...............Case Insensitive search..............*/
$string = "PHP is the web scripting language of choice";

$exp = preg_match("/php/i",$string);

if($exp)
{
	echo "A match was found"."<br>";
}

else
{
	echo "A match was not found"."<br>";
}

/* 
output: A match was found
*/
/*.....................Return as Array..................*/

$string = "PHP is the web scripting language of choice php";

$exp = preg_match_all("/php/i",$string,$array);

echo "<pre>";
print_r($array);
echo "</pre>";
/*
output:
Array
(
    [0] => Array
        (
            [0] => PHP
            [1] => php
        )

) 
 */

$string = "PHP is the web scripting language of choice php";

$exp = preg_match_all("/web|php/i",$string,$array);

echo "<pre>";
print_r($array);
echo "</pre>";

/* 
output:
Array
(
    [0] => Array
        (
            [0] => PHP
            [1] => web
            [2] => php
        )

)

*/
/*..........................Only for one value..................*/

$string = "PHP is the web scripting language of choice php";

$exp = preg_match_all("/w|o|t/i",$string,$array);

echo "<pre>";
print_r($array);
echo "</pre>";

/* 
output:
Array
(
    [0] => Array
        (
            [0] => t
            [1] => w
            [2] => t
            [3] => o
            [4] => o
        )

)
*/
/*..............................Search Numbers.......................*/

$string = "PHP is the web scripting language of 522 choice. 825";

$exp = preg_match("/522/i",$string,$array);

echo "<pre>";
print_r($array);
echo "</pre>";

/* 
output:
Array
(
    [0] => 522
)
 */
/*..............................Character Set........................*/

$string = "PHP is the web scripting language of choice php";

$exp = preg_match_all("/[wot]/i",$string,$array); // only wot character

echo "<pre>";
print_r($array);
echo "</pre>";
/* 
output: Array
(
    [0] => Array
        (
            [0] => t
            [1] => w
            [2] => t
            [3] => o
            [4] => o
        )

)
*/

/*.....................................Not the specified character.................*/

$string = "PHP is the web scripting language of choice 522 php";

$exp = preg_match_all("/[^wot]/i",$string,$array); // caret sign means except wot character

echo "<pre>";
print_r($array);
echo "</pre>";
/* 
output:
Array
(
    [0] => Array
        (
            [0] => t
            [1] => w
            [2] => t
            [3] => o
            [4] => o
        )

)
*/
/*.....................................character range.................*/
$exp = preg_match_all("/[a-c]/i",$string,$array); // a  থেকে  c  পুরা  string এ

echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/[A-J]/",$string,$array); // A  থেকে  J  পুরা  string এ

echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/[a-kA-K]/",$string,$array); // বড় ও ছোট হাতের মিলিয়ে দেখাবে

echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/[^0-9]/i",$string,$array); // caret sign means 'not 0 থেকে 9 ' [0-9 বাদে , বড় ও ছোট হাতের সব]

echo "<pre>";
print_r($array);
echo "</pre>";

$exp = preg_match_all("/[0-9a-d]/",$string,$array);

echo "<pre>";
print_r($array);
echo "</pre>";

$string = "file1 file2 file3 file4 file# file? file5 file6";
$exp = preg_match_all("/file[123]/",$string, $array); // 
echo "<pre>";
print_r($array);
echo "</pre>";
/* 
Array
(
    [0] => Array
        (
            [0] => file1
            [1] => file2
            [2] => file3
        )

)
 */
$string = "file1 file2 file3 file4 file# file? file5 file6";
$exp = preg_match_all("/file[^0-9]/",$string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

$string = 	"file.txt
			file1.xlsx
			file20.docx
			fileabc1.pptx
			filexyz.pdf";

$exp = preg_match_all("/file\w*\.(txt|docx|pptx)/",$string,$array);
echo "<pre>";
print_r($array);
echo "</pre>";
/* 
output:
Array
(
    [0] => Array
        (
            [0] => file.txt
            [1] => file20.docx
            [2] => fileabc1.pptx
        )

    [1] => Array
        (
            [0] => txt
            [1] => docx
            [2] => pptx
        )

)
*/
$string = "212-456-7896";

$exp = preg_match_all("/\d{3}-(\d{3})-(\d{4})/",$string,$array);
echo "<pre>";
print_r($array);
echo "</pre>";

/*.....................................Salary in 6 digit.................*/

$string = "

			12000
			250000
			45820
			152222";

$exp = preg_match_all("/\d{6,}/i",$string,$array);
echo "<pre>";
print_r($array);
echo "</pre>";

$string = "August 22nd
		   Aug 22
		   Aug 22nd
		   August 22";
$exp = preg_match_all("/Aug(ust)? 22(nd)?/i",$string,$array);
echo "<pre>";
print_r($array);
echo "</pre>";

$string = "PHP is the web scripting language of choice php";
$exp = preg_match_all("/w[abcdef]b/",$string,$array);
echo "<pre>";
print_r($array);
echo "</pre>";

$string = "bat cat mat rat";
$exp = preg_match_all("/[^bc]at/",$string,$array);
echo "<pre>";
print_r($array);
echo "</pre>";
/* 
output:
Array
(
    [0] => Array
        (
            [0] => mat
            [1] => rat
        )

)
 */

$string = "bat cat mat rat 555 _";
$exp = preg_match_all("/\w/i",$string,$array);
echo "<pre>";
print_r($array);
echo "</pre>";
/* 
output:
Array
(
    [0] => Array
        (
            [0] => b
            [1] => a
            [2] => t
            [3] => c
            [4] => a
            [5] => t
            [6] => m
            [7] => a
            [8] => t
            [9] => r
            [10] => a
            [11] => t
            [12] => 5
            [13] => 5
            [14] => 5
            [15] => _
        )

)
*/

$string = "PHP is the web i scripting language of choice php";
$exp = preg_match_all("/\Bi\B/i",$string,$array);
echo "<pre>";
print_r($array);
echo "</pre>";
/* 
output:
Array
(
    [0] => Array
        (
            [0] => i
            [1] => i
            [2] => i
        )

)
*/
?>