<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



<?php

echo <<<html
<div>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Age</th>
            <th>Sexe</th>
            <th>Profession</th>
        </tr>
        <tr>
            <td>Jean</td>
            <td>Dupont</td>
            <td>36</td>
            <td>Male</td>
            <td>Policier</td>
        </tr>
        <tr>
            <td>Auguste</td>
            <td>Gadbois</td>
            <td>80</td>
            <td>Male</td>
            <td>Menuisier</td>
        </tr>
        <tr>
            <td>Phillipa</td>
            <td>Bizier</td>
            <td>69</td>
            <td>Femelle</td>
            <td>Professeur</td>
        </tr>
    </table>
    
</div>
html;
echo <<<text
<h1>Ceci est un tableau</h1>
text;
?>

</body>
</html>


