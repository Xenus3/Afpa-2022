<?php 

session_start();
$session_id = session_id();
$_SESSION["ses_id"] = $session_id;
$nom = $_POST["nom"];
$_SESSION["nom"] = $nom;
header("Location: http://localhost/php/php_bases/exo-3/loginsuite.php");

exit();

?>




