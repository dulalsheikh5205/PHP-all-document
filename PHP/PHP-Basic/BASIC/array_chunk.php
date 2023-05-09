
<?php

// $cards = array("jh","js","jd","jc","qh","qs","qd","qc","kh","ks","kd","kc","ah","as","ad","ac");

// //shuffle($cards);
// $hands = array_chunk($cards, 4);
// echo "<pre>";
// print_r($hands);
// echo "</pre>";


$cards = array("jh","js","jd","jc","qh","qs","qd","qc","kh","ks","kd","kc","ah","as","ad","ac");

//shuffle($cards);
$hands = array_chunk($cards, 5);
echo "<pre>";
print_r($hands);
echo "</pre>";

/* 
output: Array
(
    [0] => Array
        (
            [0] => jh
            [1] => js
            [2] => jd
            [3] => jc
            [4] => qh
        )

    [1] => Array
        (
            [0] => qs
            [1] => qd
            [2] => qc
            [3] => kh
            [4] => ks
        )

    [2] => Array
        (
            [0] => kd
            [1] => kc
            [2] => ah
            [3] => as
            [4] => ad
        )

    [3] => Array
        (
            [0] => ac
        )

)
*/
?> 