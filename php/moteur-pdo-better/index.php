<?php 
$bdd = new PDO('mysql:host=localhost;dbname=vroomissimo', 'root', 'Lens2022!');
$query = 'SELECT * from voiture 
left join appartenir 
on voiture.id_voiture = appartenir.id_voiture
left join photos 
on appartenir.id_photos = photos.id_photos';
$allcars = $bdd->query($query);
if(isset($_GET['s']) AND !empty($_GET['s'])) {
    $recherche = htmlspecialchars($_GET['s']);
    $carburant = ($_GET['carburant']);
    $modele = ($_GET['modele']);
    $allcars = $bdd->query( 'SELECT * from voiture 
    left join appartenir 
    on voiture.id_voiture = appartenir.id_voiture
    left join photos 
    on appartenir.id_photos = photos.id_photos
    where concat(modele, marque, carburant) like "%'.$recherche.'%"
    and carburant = "'.$carburant.'"
    and modele = "'.$modele.'"');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Moteur de Recherche</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="GET">
        <label for="s">Recherchez par Marque:</label>
        <input type="search" name="s" placeholder="Rechercher une marque" autocomplete="off">
        <input type="submit" name="envoyer">
        <br/>
        <label for="carburant">Filtrer par carburant:</label>
        <input type="search" id="carburant" name="carburant">
        <br/>
        <label for="modele">Filtrer par modele:</label>
        <input type="search" id="modele" name="modele">
        
        <!--<input type="search" id="Essence" name="carburant" value="Essence">
        <label for="Essence">Essence</label><br>-->
    </form>
    <br/><br/><br/>
    <section class="afficher_voiture">
        
        <?php 

            if($allcars->rowCount() > 0)  {
                  while($voiture = $allcars->fetch()) {
                    ?>
                    <table class="centre" id="jolie">
                    <tr> <td> Marque </td> <td> Modèle </td> <td> prix </td><td> Kilométrage </td><td> Carburant </td><td> Carrosserie </td><td> Photo </td> </tr>
                    <?php
                    echo "<tr><td>".$voiture['marque']."</td>
                    <td>".$voiture['modele']."</td>
                    <td>".$voiture['prix']."</td>
                    <td>".$voiture['kilometrage']."</td>
                    <td>".$voiture['carburant']."</td>
                    <td>".$voiture['carroserie']."</td>
                    <td><img style='height:20px;width:20px' src='".$voiture['lien']."'/></td></tr>\n";
                    ?>
                    <?php
                  }  

            }else {
                ?>
                <p>Aucune voiture trouveé</p>
                <?php
            }
        
        
        ?>

    </section>
</body>
</html>