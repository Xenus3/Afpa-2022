<?php 

$check_1 = isset($_GET['interet1']) ? 1 : 0;
$check_2 = isset($_GET['interet2']) ? 1 : 0;
$check_3 = isset($_GET['interet3']) ? 1 : 0;

$interet_1 = isset($_GET['interet1']) ? $_GET['interet1'] : null;
$interet_2 = isset($_GET['interet2']) ? $_GET['interet2'] : null;
$interet_3 = isset($_GET['interet3']) ? $_GET['interet3'] : null;

echo <<<html
<h1>Merci a vous, {$_GET['nom']}</h1>
<p>Vous avez donc le bel age de {$_GET['age']} ans, vous etes {$_GET['situation']} et vous vous intéressez a {$interet_1}, {$interet_2}, {$interet_3}</p>
<p>Je m'empresse d'envoyer la requete :<b> insert into Matable values('{$_GET['nom']}', {$_GET['age']}, '{$_GET['situation']}', {$check_1}, {$check_2}, {$check_3}) </b> a notre base de données.</p>



html;



?>