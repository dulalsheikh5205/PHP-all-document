<?php
  function factorial($number)
  {
      if($number < 0){
          return -1; // wrong value and terminate the function 
      }
      elseif($number == 0){
        return 1; // terminate the function
      }
      else{
        return($number * factorial($number-1));
      }
                    // 5 * 4 = 20
                    // 20 * 3 = 60
                    // 120 * 1 = 120
  }  
  
  echo factorial(5);
?>