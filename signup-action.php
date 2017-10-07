<?php

ob_start();

$hostname='localhost';
$dbusername='root';
$dbpassword='root';
$database='foundation';


$conn = new PDO("mysql:host=$hostname;dbname=$database",$dbusername,$dbpassword);

$email = $_POST['email'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$sql = "SELECT * FROM `members` where email = :email";


$pdoStmt = $conn->prepare($sql);
$pdoStmt->bindValue(":email", $_POST['email']);
$pdoStmt->execute();


$results = $pdoStmt->fetchAll();


if ($results && $_POST['email'] === $results[0]['email']){
	echo "User Already Exists";
} else {
	$sql = "INSERT INTO `members` (`firstname`, `lastname`, `email`, `password`) VALUES (:firstname, :lastname, :email, :password);"; 

	$pdoStmt = $conn->prepare($sql);
	$pdoStmt->bindValue(":firstname", $_POST['firstname']);
	$pdoStmt->bindValue(":lastname", $_POST['lastname']);
	$pdoStmt->bindValue(":email", $_POST['email']);
	$pdoStmt->bindValue(":password", $hashed_password);
	$pdoStmt->execute();

	
	echo "User Created";

}

?>
