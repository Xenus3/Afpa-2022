<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

include 'voiture.php' ;

$honda = new Voiture("12-gh-35", "bleu", 2000, 70, 100.50, 5);
$honda->setAssurance(true);
echo"<pre>";
var_dump($honda);
$honda->Repeindre("rouge");
$honda->Mettre_essence(80);
$honda->Se_deplacer(100, 135);

?>
    
</body>
</html>