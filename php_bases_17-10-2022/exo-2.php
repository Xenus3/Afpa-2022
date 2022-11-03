<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <link rel="stylesheet" href="style-2.css">
</head>
<body>

    <h1>Additions</h1>

    <form method="GET">
        <input type="text" name="num_1">
        <input type="text" name="num_2">
        <input type="submit" value="Calculer" name="result"  >
        <input type="reset" value="Reinitialiser">
    </form>

   
  <?php 
  if(isset($_GET['result'])) {
    $num1 = floatval($_GET['num_1']);
    $num2 = floatval($_GET['num_2']);
    $totale = $num1 + $num2;
    
  
      if(!empty($num1) && !empty($num2)){
    echo "<h2>Le resultat de votre Addition est : $totale</h2>";
        } else  {
        echo "<h2 class='alert'>Veuillez remplire les champs de saisie avec des chiffres!</h2>";
        };
}
     ?>

    <h1>Multplications</h1>

    <form method="GET">
        <input type="text" name="num_3">
        <input type="text" name="num_4">
        <input type="submit" value="Calculer" name="result-1">
        <input type="reset" value="Reinitialiser">
    </form>

    <?php 
  if(isset($_GET['result-1'])) {
    $num3 = floatval($_GET['num_3']);
    $num4 = floatval($_GET['num_4']);
    $totale = $num3 * $num4;
  
      if(!empty($num3) && !empty($num4)){
        echo "<h2>Le resultat de votre Multiplication est : $totale</h2>";
        }  else if(is_string($_GET['num_3']) || is_string($_GET['num_4'])) {
          echo "<h2 class='alert'>Veuillez remplire les champs de saisie avec des chiffres!</h2>";
        }; 
}
     ?>

    <h1>Soustraction</h1>

<form method="GET">
    <input type="text" name="num_5">
    <input type="text" name="num_6">
    <input type="submit" value="Calculer" name="result-2" >
    <input type="reset" value="Reinitialiser">
</form>

<?php 
  if(isset($_GET['result-2'])) {
    $num5 = floatval($_GET['num_5']);
    $num6 = floatval($_GET['num_6']);
    $totale = $num5 - $num6;
  
      if(!empty($num5) && !empty($num6)){
        echo "<h2>Le resultat de votre Soustraction est : $totale</h2>";
        } else  {
        echo "<h2 class='alert'>Veuillez remplire les champs de saisie avec des chiffres!</h2>";
        }
    }
?>
<h1>Division</h1>

<form method="GET">
    <input type="text" name="num_7">
    <input type="text" name="num_8">
    <input type="submit" value="Calculer" name="result-3" >
    <input type="reset" value="Reinitialiser">
</form>

<?php 
  if(isset($_GET['result-3'])) {
    $num7 = floatval($_GET['num_7']);
    $num8 = floatval($_GET['num_8']);
    //$totale = $num7 / $num8;
    $totale = $num7 &&  $num8 ? $num7 / $num8 : null;

      if(!empty($num7) && !empty($num8)){
        echo "<h2>Le resultat de votre Division est : $totale</h2>";
        } else  {
        echo "<h2 class='alert'>Veuillez remplire les champs de saisie avec des chiffres!</h2>";
        }
    }
?>

</body>
</html>