<!doctype html>
<html>
<head>
<title>
Connexion à MySQL avec PDO
</title>
<meta charset="utf-8">
<link rel='stylesheet' href='style.css' />
</head>
<body>
<h1>
Interrogation de la table Voiture avec PDO
</h1>

<?php
require_once('connexion.php');
$connexion=connect_bd();
$sql="SELECT * from voiture natural join bonne_affaire";
if(!$connexion->query($sql)) echo "Pb d'accès a voiture";
else{
?>
<table class="centre" id="jolie">
<tr> <td> marque </td> <td> modele </td> <td> mise_en_circulation </td><td> kilometrage </td><td> niveau </td> </tr>
  <?php
  foreach ($connexion->query($sql) as $row)
echo "<tr><td>".$row['marque']."</td>
          <td>".$row['modele']."</td>
          <td>".$row['mise_en_circulation']."</td>
          <td>".$row['kilometrage']."</td>
          <td>".$row['niveau']."</td></tr><br/>\n";
  ?>
</table>
<?php } ?>
</body>
</html>