<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>send variable value</title>
</head>
<body>
    <?php
     $cat = "Product";
     $subcat = "Cloths";
     $srch = "Shirts";
     $next = 10;

     echo "<a href='variable_dump.php?choice=search&cat=$cat&subcat=$subcat&srch=$srch&page=$next'>Click Here</a>";


    ?>
</body>
</html>