<!-- 1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision -->


<?php
  function oddEven($number)
  {
    if($number % 2 == 0){
        return "$number is Even Number";
    }
    elseif($number % 2 == 1){
        return "$number is odd Number";
    }
  }  
  
  echo oddEven(11);

  echo "<br>";
?>
 


 <!-- 2. 1+2+3...…….100  Write a loop to calculate the summation of the series -->
<?php
    $initial = 0;
    for($i=1; $i <= 100; $i++){
        $initial += $i;

    }    
    echo"Total Numbers or 1 to 100 = ".$initial;
?>

<?php
  function fun($x,$y)
  {
    $x=4;
    $y=3;
    $z=$x+$y/$y+$x;
    echo $z;
  }      
  fun(3,4);
?>

