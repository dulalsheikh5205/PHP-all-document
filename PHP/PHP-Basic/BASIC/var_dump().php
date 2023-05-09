<?php
  $a = 10;
  $b = 10.5;
  $c = true;
  $d = "welcome";
  $e = array(10,20,"xyz");
  
  echo var_dump($a,$b,$c,$d,$e);

  /* output: int(10) float(10.5) bool(true) string(7) "welcome" array(3) { [0]=> int(10) [1]=> int(20) [2]=> string(3) "xyz" } */
?>