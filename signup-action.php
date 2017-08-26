	<?php

	$hostname= 'localhost';
	$username='root';
	$password='root';
	$database='foundation';



	if ($_POST['password']!= $_POST['psw-repeat']){
		echo("Passwords do not match. Please try again.");
	} else {

		$conn = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);

		$sql = "INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`) VALUES (:firstname, :lastname, :email, :password);"; 

		$pdoStmt = $conn->prepare($sql);
		$pdoStmt->bindValue(":firstname", $_POST['firstname']);
		$pdoStmt->bindValue(":lastname", $_POST['lastname']);
		$pdoStmt->bindValue(":email", $_POST['email']);
		$pdoStmt->bindValue(":password", $_POST['password']);
		$pdoStmt->execute();
	}