<?php
session_start();
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

if ($results && $_POST['email'] == $results[0]['email']){
    echo "User Already Exists"; 
    error_log("User exists");
} else {
    error_log("User NOT exists");
	$sql = "INSERT INTO `members` (`firstname`, `lastname`, `email`, `password`) VALUES (:firstname, :lastname, :email, :password);"; 

	$pdoStmt = $conn->prepare($sql);
	$pdoStmt->bindValue(":firstname", $_POST['firstname']);
	$pdoStmt->bindValue(":lastname", $_POST['lastname']);
	$pdoStmt->bindValue(":email", $_POST['email']);
    $pdoStmt->bindValue(":password", $hashed_password);
    $exResults = $pdoStmt->execute(); 
    
    if ($exResults){
        echo "User Created";
        $id = $conn->lastInsertId();
        $date = date('Y-m-d H:i:s');
        $_SESSION['user_record'] = array();
        $_SESSION['user_record']['id'] = $id;
        $_SESSION['user_record']['firstname'] = $_POST['firstname'];
        $_SESSION['user_record']['lastname'] = $_POST['lastname'];
        $_SESSION['user_record']['email'] = $_POST['email'];
        $_SESSION['user_record']['password'] = $hashed_password;
        $_SESSION['user_record']['updated'] = $date;

        $_SESSION['login'] = true;
        $_SESSION['member'] = array(
            'email' => $_POST['email'],
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname']
        );
    } else {
         echo "User could not be created at this time"; 
    }
    
} 


?>
