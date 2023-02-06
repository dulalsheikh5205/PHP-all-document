<?php
//   if(true){
//     if(true){
//         if(true){
//             echo "hello world";
//         }
//         else{
//             echo "no 1";
//         }
//     }
//     else{
//         echo "no 2";
//     }
//   }      
//   else{
//     echo "no 3";
//   }

$condition1 = true;
$condition2 = true;
$condition3 = false;

if($condition1 && $condition2 && $condition3)
{
    echo "hellow world";
}
else if($condition1 && $condition3)
{
    echo "no 1";
}
else if($condition1)
{
    echo "no 2";
}
else{
    echo "no 3";
}

?>