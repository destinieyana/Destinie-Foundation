<?php

ob_start();
session_start();


$hostname='localhost';
$username='root';
$password='root';
$database='foundation';

// Connect to the database
$conn = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);



$sql = "SELECT * FROM `users` where email = :username and password = :password;";


$pdoStmt = $conn->prepare($sql);
$pdoStmt->bindValue(":username", $_POST['email']);
$pdoStmt->bindValue(":password", $_POST['password']);
$pdoStmt->execute();

$results = $pdoStmt->fetchAll();

if ($_POST['password'] === $results[0]['password']){
	$_SESSION['login'] = true;
	$_SESSION['user'] = array(
		'email' => $_POST['email'],
		'firstname' => $results[0]['firstname'],
		'lastname' => $results[0]['lastname'],
	);
	unset($results[0]['password']);
	$_SESSION['user_record'] = $results[0];
	header('Location: index.php');
} else {
	//header('Location: index.php?login=failed');
	echo "Wrong Email or Password";
}


//echo 'Welcome '.$_SESSION['username'];

?>