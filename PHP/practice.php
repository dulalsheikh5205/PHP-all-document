<?php
  $number = 1;
  
if($number > 0){
    echo  "positive number";
  }
 if($number < 0){
    echo  'negative';
    if($number < -10){
        echo'value is below -10';
    }

 }
 else{
    echo 'it\'s zero';
} 
 
// $res = $number > 0 ? 'positive':($number < 0 ?($number < -10?'value is below -10':'negative'):'it\'s zero number');
// echo $res;


 
  
?>