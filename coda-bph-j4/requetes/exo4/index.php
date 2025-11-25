<?php
$host = "localhost";
$port = "3306";
$dbname = "sqlintro";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "root";
$password = "";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

$query = $db->prepare('UPDATE users SET job = 5 WHERE users.id = 7;');
$parameters = [
    // 'id' => $_GET['id']
];

$query->execute($parameters);
$users = $query->fetch(PDO::FETCH_ASSOC);
var_dump($users)
?>