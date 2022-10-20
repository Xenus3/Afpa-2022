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
    session_start();
    
    if(isset($_SESSION["ses_id"])) {
    echo "<h1>Au menu du jour pour vous, ". $_SESSION["nom"]."...</h1>";
    
    echo "<ul>
        <li><a href=#>Sommaire</a></li>
        <li>Et aussi...</li>
        <li>Et encore...</li>
        <li>Et pour finir...</li>
    </ul>";
} else {
    echo "<h1>ERREUR login : vous n'avez pas droit d'acces a ce site</h1>";
    echo "<a href='http://localhost/php/php_bases/exo-3/login.html'>Retour a la page d'accueil</a>";

}

session_destroy();
?>
</body>
</html>