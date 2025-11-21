<?php
    $users = [
        [
            "firstName" => "Bugs",
            "lastName" => "Bunny",
            "age" => 29
        ],
        [
            "firstName" => "Roger",
            "lastName" => "Rabbit",
            "age" => 17
        ]
    ];
    $i = 0;
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        <h1>
            Liste des utilisateurs
        </h1>
        <ul>
            <?php foreach($users as $user) { ?>
                <li><?php echo "{$user["firstName"]} {$user["lastName"]}" ?></li>
                <?php if($user["age"]<18) { ?>
                    <p>Vous êtes mineur.<p>
                <?php } else { ?>
                    <p>Vous êtes majeur youpi.<p>
                <?php } ?>
                <?php $i++ ?>
            <?php } ?>
        </ul>
    </body>
</html>

