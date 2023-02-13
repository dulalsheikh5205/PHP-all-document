 <?php
//   for($i=1; $i<=3;$i++){
//     for($j=1;$j<=3;$j++){
//         echo "$i $j<br/>";
//     }
//   }   




?> 

<?php
    // for($a = 1; $a <= 5; $a++) {
    //     for($b = 1; $b <= $a; $b++) {
    //         echo "*";
    //         if($b < $a) {
    //            echo " ";
    //         }
    //     }
    //     echo "<br />";
    // }
?>

<?php
  for($i=1; $i < 20; $i++){ // $i is incrementing
    for($j=$i; $j <= 20; $j++){// $j is incrementing
        echo "&nbsp"; // it will be print blank
    }
    for($x=1; $x <= $i; $x++){ // $x is incrementing
        echo "*"; //it will print * sign
    }
    echo "<br>";
  }      
?>

<?php
        
    print "<table border='1'";

    for($y=1; $y<=12; $y++){
        print "<tr>";

        for($x=1; $x<=12; $x++){
            print "<td>";
            print $x * $y;
            print "</td>\n";
        }
        print "</tr>";
    }
    print "</table>";

?>

