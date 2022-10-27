<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_3.css">
</head>
<body>
    
</body>
</html>




<?php

$etudiants = array("jimmy"=>15, "halim"=>15, "greg"=>15, "cedric"=>15, "anthony"=>15, "oceane"=>15, "perrine"=>15, "fred"=>15);


$longueur = count($etudiants);


echo "<table>";
echo "<th>Nom</th><th>Prenom</th>";
foreach($etudiants as $cle => $valeur) {
    echo "<tr><td>$cle</td><td>$valeur</td></tr>";
}
echo "</table>";