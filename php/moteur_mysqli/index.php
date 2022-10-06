<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action=""> 
     Rechercher un mot : <input type="text" name="recherche">
     <input type="SUBMIT" value="Search!"> 
     </form>
    
</body>

</html>

<?php

    $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = 'vroomissimo';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = 'Lens2022!';       // Mot de passe de l'utilisateur

    // Ouvre une connexion au serveur MySQL
    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


     // Récupère la recherche
     $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

     // la requete mysql
     $q = $conn->query(
     "SELECT * FROM voiture
      WHERE marque LIKE '%$recherche%'
      OR modele LIKE '%$recherche%'
      LIMIT 10");

     // affichage du résultat
     while( $r = mysqli_fetch_array($q)){
     echo 'Résultat de la recherche: '.$r['marque'].', '.$r['modele'].', '.$r['mise_en_circulation'].', '.$r['prix'].' <br />'
;
     }
?>