<?php
  function twosum($nums, $target){
    for($i=0; $i<=count($nums)-1;$i++){
        if($nums[$i] + $nums[$i+1]==$target){
            echo $nums[$i]." ".$nums[$i+1];
        }
    }
  }     
  
  $nums = [5,3,7,1,8,0,9,7,21];
  $target = 8;

  twosum($nums,$target);

?>