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

$query = $db->prepare('INSERT INTO users (id, username, email, job) VALUES 
("6", "Batman", "bruce@wayne.com", "3");');
$parameters = [
    // 'id' => $_GET['id']
];

$query->execute($parameters);
$users = $query->fetch(PDO::FETCH_ASSOC);
var_dump($users)
?>