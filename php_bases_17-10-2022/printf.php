<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    $euro = 6.55957;
    printf("%.2f FF<br />",$euro);
    $money1 = 68.75;
    $money2 = 54.35;
    $money = $money1 + $money2;

    echo "affichage sans printf : " .$money. "<br/>";
    $monformat = sprintf("%01.2f", $money);

    echo "affichage avec printf :".$monformat."<br/>";

    $year="2002";
    $month="4";
    $day="5";
    $varDate = sprintf("%04d-%02d-%02d", $year, $month, $day);

    echo"affichage avec sprintf : " . $varDate;
    ?>