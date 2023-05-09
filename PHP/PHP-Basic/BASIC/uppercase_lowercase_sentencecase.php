 <?php 

function toUpper($string)
{
	return strtoupper($string);
}

$string = "Amanur Rahman Aman";

echo (toUpper($string));

echo "<br>";

function toLower($string)
{
	return strtolower($string);
}

$string2 = "Amanur Rahman Aman";
echo (toLower($string2));

echo "<br>";

function toCapitalize($string)
{
	return ucwords($string);
}

$string3 = "Amanur Rahman Aman";
echo (toCapitalize($string3));

/* 
output: AMANUR RAHMAN AMAN
amanur rahman aman
Amanur Rahman Aman
*/
?>