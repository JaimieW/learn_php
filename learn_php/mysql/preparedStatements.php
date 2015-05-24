<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// connect
$conn = new mysqli($server, $username, $password, $dbname);
// check conn
if($conn->connect_error){
	die("connection failed: ".$conn->error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests(firstname, lastname, email)
		VALUES(?,?,?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set params
$firstname = "Paul";
$lastname = "Murray";
$email = "paul@mf.com";
// execute
$stmt->execute();

// set params
$firstname = "Paul";
$lastname = "Adamson";
$email = "paul@se.com";
// execute
$stmt->execute();


echo "new records added";

$stmt->close();
$conn->close();
?>