<?php

ob_start();

$hostname='localhost';
$dbusername='root';
$password='root';
$database='foundation';


$conn = new PDO("mysql:host=$hostname;dbname=$database",$dbusername,$password);

$email = $_POST['email'];



$sql = "SELECT * FROM `users` where email = :email";


$pdoStmt = $conn->prepare($sql);
$pdoStmt->bindValue(":email", $_POST['email']);
$pdoStmt->execute();


$results = $pdoStmt->fetchAll();


if ($_POST['email'] === $results[0]['email']){
	echo "User Already Exists";
} else {
	$sql = "INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`) VALUES (:firstname, :lastname, :email, :password);"; 

	$pdoStmt = $conn->prepare($sql);
	$pdoStmt->bindValue(":firstname", $_POST['firstname']);
	$pdoStmt->bindValue(":lastname", $_POST['lastname']);
	$pdoStmt->bindValue(":email", $_POST['email']);
	$pdoStmt->bindValue(":password", $_POST['password']);
	$pdoStmt->execute();

	echo "User Created";

}

?>