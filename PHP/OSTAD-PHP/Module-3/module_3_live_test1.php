<?php

function has_sum_equal($array,$target){
    for($i=0; $i < count($array); $i++){
        for($j= $i + 1;$j<count(($array)); $j++){
            if($array[$i] + $array[$j] == $target){
                return "true";
            }
        }
    }
}
$numbers = array(5,7,5,3,8,4,2);
$target_num = 8;

$result = has_sum_equal($numbers,$target_num);

    if($result){
        echo "true";
    }else{
        echo "false";
    }

?>
<?php

function gcd($a, $b) {
    
    $a = abs($a);
    $b = abs($b);
  
    
    if ($a < $b) {
      list($a, $b) = array($b, $a);
    }
  
    
    while ($b > 0) {
      $r = $a % $b;
      $a = $b;
      $b = $r;
    }
  
   
    return $a;
  }

  echo gcd(12,18);
?>




///mahmudul
<?php
function gcd(int $a, int $b) {
    while($a != $b){
        if($a > $b) {
            $a -= $b;
        }
        else {
            $b -= $a;
        }
    }
    return $a;
}
echo gcd(12,18);
?>