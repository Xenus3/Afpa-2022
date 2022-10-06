<?php 
$bdd = new PDO('mysql:host=localhost;dbname=vroomissimo', 'root', 'Lens2022!');
$query = 'select * from voiture';
$allcars = $bdd->query($query);
if(isset($_GET['s']) AND !empty($_GET['s'])) {
    $recherche = htmlspecialchars($_GET['s']);
    $allcars = $bdd->query( 'select * from voiture where marque like "%'.$recherche.'%"
    or modele like "%'.$recherche.'%"
    or carburant like "%'.$recherche.'%"');
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
                    <td></td></tr>\n";
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