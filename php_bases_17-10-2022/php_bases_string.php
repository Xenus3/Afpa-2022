<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $chaine = "Ceci st une chaine de caractères";

        echo $chaine;
        echo "\n";
        // afficher 1 caractère de la chaine

        echo $chaine[3];
        
        // Modifier un caractère de la chaine

        $chaine[0] = "F";
        echo $chaine;
        echo "\n";

        // Extraire une partie de la chaine

        var_dump(substr($chaine, 0, 4));
        echo "\n";

        // Remplacer une partie de la chaine

        $chaine = str_replace('Feci', 'Cela', $chaine);//sensible a la casse str_ireplace est insensible a la casse
        var_dump($chaine);

        // vefifier si une chaine contient un mot

        var_dump(str_contains($chaine, 'une'));

        //verifier si une chaine commence ou se termine par

        var_dump(str_starts_with($chaine, 'Ce'));
        var_dump(str_ends_with($chaine, 'Ce'));

    ?>
</body>
</html>