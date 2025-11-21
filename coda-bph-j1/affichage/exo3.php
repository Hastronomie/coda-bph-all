<?php
    $users = [
        [
            "firstName" => "Bugs",
            "lastName" => "Bunny"
        ],
        [
            "firstName" => "Roger",
            "lastName" => "Rabbit"
        ]
    ];
    $i = 0;
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3</title>
    </head>
    <body>
        <h1>
            Liste des utilisateurs
        </h1>
        <ul>
            <?php  while($i < count($users)) { ?>
                <?php foreach($users[$i] as $user) { ?>
                    <li><?= $user ?></li>
                <?php } ?>
                <?php $i++ ?>
            <?php } ?>
        </ul>
    </body>
</html>