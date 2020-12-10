<?php 
$name = "Pierre";
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo1</title>
</head>
<body>

    <!-- Echo normal -->
    <h1><?php$name ?></h1>
    <p>Ceci est une paragraphe</p>

    <!-- Echo court -->
    <p>Ceci est un paragraphe mon chère <?= $name ?></p>
    
</body>
</html>