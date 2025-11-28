<?php
require "Mage.php";
require "Warrior.php";

$villageois= new Character();
$warrior= new Warrior(9999999, "Petit-pied", 99999999);
$mage= new Mage(1, "Sorcier suprême", 1);

echo "-{$warrior->introduce($warrior->name)}<br>";
echo "-Trop bien, tu dois être nouveau ! Moi c'est {$mage->introduce($mage->name)}<br>";
echo "-Tandis que moi je suis un simple villageois. Montrez-moi votre puissance !<br>";

echo "-Moi, noble guerrier, je n'ai que {$warrior->getEnergy()} de stamina et {$warrior->getLife()} de vie..<br>";
echo "-.... Je n'ai que {$mage->getMana()} de mana et {$mage->getLife()} de vie... Je jure que j'ai opti mon build en intelligence ^^";

?>