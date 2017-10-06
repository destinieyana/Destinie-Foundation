<?php

ob_start();
session_start();

$hostname='localhost';
$dbusername='root';
$dbpassword='root';
$database='foundation';

// Connect to the database
$conn = new PDO("mysql:host=$hostname;dbname=$database",$dbusername,$dbpassword);

$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT * FROM `members` where email = :email;";

$pdoStmt = $conn->prepare($sql);
$pdoStmt->bindValue(":email", $_POST['email']);
$pdoStmt->execute();

$results = $pdoStmt->fetchAll();


	
if ($results && password_verify($password, $results[0]['password'])){
	$_SESSION['login'] = true;
	$_SESSION['member'] = array(
		'email' => $_POST['email'],
		'firstname' => $results[0]['firstname'],
		'lastname' => $results[0]['lastname'],
	);
	unset($results[0]['password']);
	$_SESSION['user_record'] = $results[0];
	echo "Welcome!";
	
} else {
	//header('Location: index.php?login=failed');
	echo "Wrong Email or Password";

}


?>