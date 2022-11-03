<b> Quel est le prix de votre voiture ? </b>
<?php //hors de cet environnement, la ligne suivante s'écrira :
   //<form action="lesson=07_post_2.php" method="post"> ?>
<form action="" method="post">
<table><tr><th colspan=2>
Vous devez saisir une des deux valeurs, <br />et une seule :</th></tr>
<tr><td> Prix en francs : </td><td><input type="text" name="car_price_Fr"></td></tr>
<tr><td>Prix en euros  :  </td><td><input type="text" name="car_price_Eu"></td></tr>
<tr><td>Prix en dollars :  </td><td><input type="text" name="car_price_dol"></td></tr>
<tr><td colspan=2 align=right><input type="submit" name="send_price" value="Envoyer le prix" </td></tr>
</table>
</form>
<?php

if(isset($_POST['send_price'])) {

    if(isset($_POST['car_price_Eu'])) {
    
    $prix_eu = floatval($_POST['car_price_Eu']);    
    $prix_fr = $prix_eu * 6.56;
    $prix_dol = $prix_eu ;
    
    echo "Prix en Francs : $prix_fr<br>";
    echo "Prix en Euros : $prix_eu<br>";
    echo "Prix en Dollars : $prix_dol $";
}
}