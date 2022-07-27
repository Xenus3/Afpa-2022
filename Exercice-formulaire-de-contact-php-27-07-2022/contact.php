<?php
//si le formulaire a été soumis 
if (isset($_POST["message"])) {
$retour = mail("k.aberbach@hotmail.com", $_POST["sujet"], $_POST["message"], "Reply-to:" . $_POST["email"]);
if ($retour) {
    echo "<p>L'email a bien été envoyé</p>";
}
}