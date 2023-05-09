<?php 

error_reporting(0);
$foo = '6b55ar';
$bar = true;

settype($foo, integer);
echo gettype($foo);
/* output: integer */
echo "<br>";
echo $foo;
/* output: 6 */
echo "<br>";
$b = (integer)$foo;
echo gettype($b); 
echo $b;
/* output: integer6 */
echo "<br>";
$c = (double)$foo;
echo gettype($c);
echo $c;
/* output: double6 */
echo "<br>";
$d = (string)$foo;
echo gettype($d);
echo $d;
/* output: string6 */


?>