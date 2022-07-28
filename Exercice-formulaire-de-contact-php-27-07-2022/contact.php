<?php
$numero = $_POST['numero'];
if (preg_match('#(0|\+33)[1-9]( *[0-9]{2}){4}#', $numero)) {
    echo "Le numéro de téléphone entré est correct.";
    // On peut ajouter le numéro à la base de donnée
} else {
    echo "Le numéro de téléphone entré est incorrect.";
    // On ne peut pas ajouter le numéro à la base de donnée
}
?>