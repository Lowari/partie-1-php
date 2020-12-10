<?php 

$mot = "Tabouret";
$nombre = 42;
$nombreVirgule = 42.5;
$vrai = true;

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo4</title>
</head>
<body>
    <ul>
        <li>Ceci est un string : <?= $mot ?></li>
        <li>Ceci est un integer : <?= $nombre ?></li>
        <li>Ceci est un float : <?= $nombreVirgule ?></li>
        <li>Ceci est un booléan : <?= $vrai ?></li>
    </ul>
</body>
</html>