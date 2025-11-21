<?php
    $grades = [
        "french" => [12, 9, 13],
        "english" => [18, 12, 11],
        "maths" => [15, 11, 13]
    ];
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5</title>
    </head>
    <body>
        <h1>
            Liste des notes
            <?php foreach($grades as $key => $grade) { ?>
                <li><?php echo "{$grade} {$key}" ?></li>
            <?php } ?>
        </h1>
        <ul>

        </ul>
    </body>
</html>