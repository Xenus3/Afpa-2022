<!DOCTYPE html>
<html>
<body>
<!-- formulaire -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname" >
  Prenom: <input type="text" name="lname" >
  Sexe: <input type="text" name="sexe" >
  Profession: <input type="text" name="prof" >
  <input type="submit" value="Soumettre">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // variables
    $name = $_POST['fname'];
    $prenom = $_POST['lname'];
    $sexe = $_POST['sexe'];
    $profession = $_POST['prof'];
    $conjugaison = $sexe === "homme" ? "un homme" : "une femme";

    if (!empty($name) && !empty($prenom) && !empty($sexe) && !empty($profession)) {
        
        echo "<h1>Votre nom est $name votre prenom est $prenom, vous etes $conjugaison, et votre prefession est $profession</h1>"; 

    }

    
}
?>

</body>
</html>