<!doctype html>
<html>
<head>
<title>
Connexion à MySQL avec PDO
</title>
<meta charset="utf-8">
</head>
<body>
<h1>
Interrogation de la table voiture avec PDO
</h1>
<?php
require_once('connexion.php');
$connexion=connect_bd();
$sql="SELECT * from voiture";
if(!$connexion->query($sql)) echo "Pb d'accès a voiture";
else {
     ?>
     <form action="recherche.php" method="GET">
    	<select name="marque">
      <?php
      foreach ($connexion->query($sql) as $row)
      if(!empty($row['marque']))
    	echo "<option value='".$row['marque']."'>"
        .$row['marque']." </option>\n";
      ?>
     </select>
     <input type="submit" value="Rechercher">
     </form>
     <?php 
      } 
     ?>
</body>
</html>