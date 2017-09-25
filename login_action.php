<?php

ob_start();
session_start();


$hostname='localhost';
$dbusername='root';
$dbpassword='root';
$database='foundation';

// Connect to the database
$conn = new PDO("mysql:host=$hostname;dbname=$database",$dbusername,$dbpassword);



$sql = "SELECT * FROM `users` where email = :email and password = :password;";


$pdoStmt = $conn->prepare($sql);
$pdoStmt->bindValue(":email", $_POST['email']);
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
	echo "Welcome!";
} else {
	//header('Location: index.php?login=failed');
	echo "Wrong Email or Password";
}



//echo 'Welcome '.$_SESSION['username'];

?>