<?php
 $tutionFee = 21000;

/* 
 if($tutionFee > 20000){
    echo "commission is twenty-five percent is = " .(25/100)*$tutionFee." $";
 }
 else if($tutionFee > 10000 && $tutionFee < 20000){
    echo "commission is twenty percent = " .(20/100)*$tutionFee." $";
 }
 else if($tutionFee < 10000 && $tutionFee > 7000){
    echo"commission rate is fifteen percent = ".(15/100)*$tutionFee." $";
 }
 else if( $tutionFee < 7000){
    echo "the data will be invalid";
 }
 */

 $result = $tutionFee > 20000 ? "commission is twenty-five percent is = " .(25/100)*$tutionFee." $":
 ($tutionFee > 10000 && $tutionFee < 20000 ? "commission is twenty percent = " .(20/100)*$tutionFee." $":
 ($tutionFee < 10000 && $tutionFee > 7000 ? "commission rate is fifteen percent = ".(15/100)*$tutionFee." $":
   ($tutionFee < 7000 ? "the data will be invalid":"")));
   
 echo $result;
?>