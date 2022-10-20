<?php
for( $i = 0; $i <= 11; $i++ ) // on va cette fois ci de 0 à 11
{ // début de la première boucle
 
  if( $i && $i != 11 ) // si ce n'est ni la première ni la dernière ligne , équivalent à if( $i != 0 && $i != 11 )
    echo '| ';
  else // si on est dans la première ou la dernière ligne
    echo '####';

  for( $j = 1; $j <= 10; $j++ )
  { // début de la seconde boucle
 
    if( !$i || $i == 11 ) // si $i vaut 0 ou 11 (première ou dernière ligne)
      echo '####';
    else // sinon, on va faire la multiplication
    {
      $produit = $i * $j; // on calcule le produit
     
      if( $produit < 10 ) // si le produit < 10
        echo '00' . $produit . ' | '; // on met 2 "0" devant
      else if( $produit < 100 )
        echo '0' . $produit . ' | '; // on met 1 "0" devant
      else
        echo $produit . ' | ';
    }
   
  } // fin de la seconde boucle

 
  echo '<br />';
} // fin de la première boucle
?>