<?php
$dilemme =
[

    [
        "resultat" => "Vous êtes malin, vous avez fait demi-tour et sauver tout le monde ! <br>Bravo ! (ദ്ദി˙ᗜ˙)",
        "option" => "Mystère"
    ],
    [
        "resultat" => "Tout ce sang aurait pu être évité... Dommage (╥_╥) ",
        "option" => "Ace"
    ],
    [
        "resultat" => "Peut mieux faire.. シ<br>Et tu VAS faire mieux:",
        "option" => "Solo ult"
    ]
];

if (!empty($_GET["choix"]))
{
    $choix = $_GET["choix"];
}
else
{
    $choixTrouve = null;
}

// ========== Aide de l'IA Claude pour la logique de la boucle========

if ($choix) 
{
    foreach($dilemme as $dealemme)
    {
        if ($dealemme["option"] === $choix)
        {
            $choixTrouve = $dealemme["resultat"];
            break;
        }
    }
}
?>