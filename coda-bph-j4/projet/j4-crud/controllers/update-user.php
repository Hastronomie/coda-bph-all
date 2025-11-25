<?php
require "connexion.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $query = $db->prepare("UPDATE users SET username = :username, email = :email, job = :job WHERE id = :id");
    $userId = (int)$_POST['id'];
    $parameters = [
        'id' => $_POST['user-id'],
        'username' => $_POST['name'],
        'email' => $_POST['email'],
        'job' => $_POST['job']
    ];

    $query->execute($parameters);

    $id = $db->lastInsertId();
}
header('Location: '. '../index.php');
?>