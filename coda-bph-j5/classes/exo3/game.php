<?php 
require "Character.php";
$character = new Character("Ragnar");

$character->getWeapon()->setName("Sword");
$character->getWeapon()->setDamage("10");

echo "{$character->getName()} possède l'{$character->getWeapon()->getName()} qui inflige {$character->getWeapon()->getDamage()} de dégats !<br>"; 
echo "{$character->fight()} D:";
?>