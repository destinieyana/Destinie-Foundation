<?php

ob_start();
$hostname='localhost';
$username='root';
$password='root';
$database='foundation';

// Connect to the database
$conn = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);

$sql = "SELECT * FROM `users` where username = :username;";

$pdoStmt = $conn->prepare($sql);
$pdoStmt->bindValue(":username", $_POST['username']);
$pdoStmt->execute();

$results = $pdoStmt->fetchAll();

if ($_POST['password'] === $results[0]['password']){
	header('Location: index.php');
} else {
	echo "Wrong password!";
}

?>