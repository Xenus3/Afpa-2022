<?php 
$bdd = new PDO('mysql:host=localhost;dbname=vroomissimo', 'root', 'Lens2022!');
$query = 'SELECT * from voiture';
$allcars = $bdd->query($query);
if(isset($_GET['s']) or isset($_GET['carburant']) or isset($_GET['modele'])) {
    $recherche = htmlspecialchars($_GET['s']);
    $carburant = htmlspecialchars($_GET['carburant']);
    $modele = htmlspecialchars($_GET['modele']);
    $conditions = array();

    if(!empty($recherche)) {
      $conditions[] = 'marque like "%'.$recherche.'%"';
    }
    if(!empty($carburant)) {
      $conditions[] = 'carburant like "%'.$carburant.'%"';
    }
    if(!empty($modele)) {
        $conditions[] = 'modele like "%'.$modele.'%"';
    }

    $sql = $query;
    if (count($conditions) > 0) {
      $sql .= " WHERE " . implode(' AND ', $conditions);
    }
    $allcars = $bdd->query($sql);
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
                    <td><img style='height:20px;width:20px' src=''/></td></tr>\n";
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