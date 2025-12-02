<?php
var_dump($_GET);
require "config/autoload.php";

$router=new Router;
$router->handleRequest($_POST);

?>