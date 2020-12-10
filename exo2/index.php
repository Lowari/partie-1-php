<?php 

$firstname = 'Julien';
$lastname = 'FRERET';
$age = 25;

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2</title>
</head>
<body>
    <p>Bonjour <?= $firstname . " ". $lastname ?>, vous êtes agée de <?= $age ?> ans.</p>
</body>
</html>