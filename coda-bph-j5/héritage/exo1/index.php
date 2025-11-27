<?php
require "Reader.php";

$lecteur = new Reader("mail.normal@idee.com","MdP");

$books=$lecteur->addBookToFavorites("Le meilleur livre");
$books=$lecteur->addBookToFavorites("Le vrai meilleur livre");

echo "Liste des favoris:<br>";
foreach($books as $book)
{
    echo "$book<br>";
}

$books=$lecteur->removeBookFromFavorites("Le meilleur livre");
echo "<br>Liste des favoris après modification:<br>";
foreach($books as $book)
{
    echo "$book<br>";
}

echo "<br>Données utilisateur:<br>";
$utilisateur= $lecteur->login();
echo "{$utilisateur['login']}<br>{$utilisateur['password']}";
?>