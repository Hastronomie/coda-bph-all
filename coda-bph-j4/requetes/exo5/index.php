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

$query = $db->prepare('DELETE FROM users WHERE users.id = 6;');
$parameters = [
    // 'id' => $_GET['id']
];

$query->execute($parameters);
$users = $query->fetch(PDO::FETCH_ASSOC);
var_dump($users)
?>