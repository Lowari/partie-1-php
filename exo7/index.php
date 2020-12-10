<?php 

$lastname = 'Julien';
$firstname = 'Freret';
$age = '25';

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo7</title>
</head>
<body>
    
    <p>Bonjour <?php echo $lastname . ' ' . $firstname ?> tu as <?= $age ?> ans.</p>
    <p><?php echo "Bonjour $lastname $firstname tu as $age ans." ?></p>

</body>
</html>