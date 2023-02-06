<?php
  $n = 10;
  
  if(12 == $n){
    echo "twelve";
  }
  else if(10 == $n)
  {
    echo "ten";
  }
  else{
    echo "A number";
  }
  echo "\n";

  $numberInWord= 12 == $n?"twelve":10== $n?"ten":"A number";
  echo $numberInWord;

  echo "\n";

  if($n % 2 == 0){
    echo "even";
  }
  else{
    echo "odd";
  }

  echo "\n";

  $result = ($n % 2 == 0)?"evenn":"oddd";
  echo $result;

?>