<?php
require "connexion.php";
require "User.php";

$superman = 
[
	"first_name" => "Clark",
	"last_name" => "Kent",
	"email" => "clark.kent@test.fr"
];

$superman= new User($superman["first_name"], $superman["last_name"], $superman["email"]);

$query = $db->prepare('SELECT * FROM users');
// $parameters = [];

$query->execute();
$user = $query->fetchAll(PDO::FETCH_ASSOC);
$users=[];

foreach ($user as $row)
{
	$newUser = new User
	(
		$row["first_name"], 
		$row["last_name"], 
		$row["email"]
	);
	$users[]=$newUser;
}

$query = $db->prepare('INSERT INTO users (first_name, last_name, email) VALUES 
(:first_name, :last_name, :email);');
$parameters = 
[
	'first_name' => $superman->getFirstname(),
	'last_name' => $superman->getLastname(),
	'email' => $superman->getEmail()
];

$query->execute($parameters);
$id = $db->lastInsertId();



// ==================Débbug======================

echo "<pre>";
var_dump($users);
echo "</pre>";
?>
