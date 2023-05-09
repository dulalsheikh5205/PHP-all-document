<?php
function salestax($price,$tax=2)
{
    $total = $price+($price * $tax);
    echo "Total cost is: $total"."<br>";
}
salestax(15);
salestax(85);

/* output: Total cost is: 45
Total cost is: 255 */
echo "<br>";

function customeFont($font, $size=1.5)
{
    echo "<p style=\"font-family:$font; font-size:{$size}em; color:blue; font-weight:bold; text-align:center; background-color:red;\">Welcome Here</p>";
}

customeFont("Arival,2");
customeFont("Times",3);
customeFont("Courier");
echo "<br>";

function customFont($font, $size=1.5,$color)
{
    echo "<p style=\"font-family:$font; font-size:{$size}em; color:$color;\">Welcome Home</p>";
}

customFont("Calibri",2,"blue");





?>