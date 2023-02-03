<?php 

    require_once __DIR__ . '/models/Movie.php';
    $braccobaldo = new Movie('Braccobaldo', 'Brad Pitt', 1990, 'Action');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>

    <h1>
        Titolo:
        <?php
            print_r($braccobaldo->getEl('title'))
        ?>
    </h1>
    <h2>
        Attore principale:
        <?php  
            print_r($braccobaldo->getEl('mainActor'))
        ?>
    </h2>
    <h2>
        Anno di produzione:
        <?php  
            print_r($braccobaldo->getEl('year'))
        ?>
    </h2>
    <h2>
        Genere:
        <?php  
            print_r($braccobaldo->getEl('genre'))
        ?>
    </h2>
    
</body>
</html>