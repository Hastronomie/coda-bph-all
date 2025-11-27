<?php
require "User.php";
$user = new User(1, "admin", "admin");
$user2 = new User(2, "user", "user");
echo "{$user->getId()} {$user->getUsername()} {$user->getPassword()} {$user2->getId()} {$user2->getUsername()} {$user2->getPassword()}";
?>