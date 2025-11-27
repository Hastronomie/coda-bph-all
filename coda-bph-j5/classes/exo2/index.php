<?php 
require "Character.php";
$user = new Character(1);
echo $user->getFullName();
$sarah = new Character(2);
$sarah->setFirstName("Sarah");
$sarah->setLastName("Connor");
echo $sarah->getFullName();
?>