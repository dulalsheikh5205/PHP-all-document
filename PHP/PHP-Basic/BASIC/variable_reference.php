<?php
  
	$a = 55;
	$b = &$a; // variable reference by '&' sign

    /* output: 55 */
	echo $b;

	$a = 65;
   
	print "<br>";

	print $b;
     /* output: 65 */
	print "<br>";
	$a = 110;
	print $b; 
     /* output: 110 */     
?>