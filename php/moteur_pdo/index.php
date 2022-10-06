<?php 
$bdd = new PDO('mysql:host=localhost;dbname=vroomissimo', 'root', 'Lens2022!');
$allcars = $bdd->query('select * from voiture');
if(isset($_GET['s']) AND !empty($_GET['s'])) {
    $recherche = htmlspecialchars($_GET['s']);
    $allcars = $bdd->query('select * from voiture where marque like "%'.$recherche.'%"');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Moteur de Recherche</title>
</head>
<body>
    <form method="GET">
        <input type="search" name="s" placeholder="Rechercher une marque" autocomplete="off">
        <input type="submit" name="envoyer">
    </form>

    <section class="afficher_voiture">
        
        <?php 

            if($allcars->rowCount() > 0)  {
                  while($user = $allcars->fetch()) {
                    ?>
                    <p><?= $user['marque']; ?></p>
                    <?php
                  }  

            }else {
                ?>
                <p>Aucun utilisateur trouvé</p>
                <?php
            }
        
        
        ?>

    </section>
</body>
</html>