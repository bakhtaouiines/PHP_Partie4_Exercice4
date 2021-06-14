<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4.4</title>
</head>
<body>
    <h1>Exercice 4 Partie 4 : Les fonctions PHP</h1>
    <?php
    declare(strict_types = 1);
    function result(int $number1, int $number2) : string {
        if ($number1 > $number2)
        {
            return $number1. 'est plus grand que' .$number2;
        }
        if ($number1 < $number2)
        {
            return $number1. 'est plus petit que' .$number2;
        }
        return $number1. 'est égal à' .$number2;
    }?>
    <p><?=result(48,48);?></p>    
</body>
</html>