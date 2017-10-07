<?php
$hostname='localhost';
$dbusername='root';
$dbpassword='root';
$database='foundation';

// Connect to the database
$conn = new PDO("mysql:host=$hostname;dbname=$database",$dbusername,$dbpassword);


// Select all from db
$sql = "SELECT * FROM `members`;";

$pdoStmt = $conn->prepare($sql);
$pdoStmt->execute();

$results = $pdoStmt->fetchAll();


foreach($results as $item) {

	// Check if already hashed
	$details = password_get_info($item['password']);

	if ($details['algo'] === 0) {
		$dbhash = password_hash($item['password'], PASSWORD_DEFAULT);

		$sql = "UPDATE `members` SET password = :password WHERE id = :id";

		$pdoStmt = $conn->prepare($sql);
		$pdoStmt->bindValue(":password", $dbhash);
		$pdoStmt->bindValue(":id", $item['id']);
		$pdoStmt->execute();
	}
}