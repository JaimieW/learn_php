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

$sql = "INSERT INTO MyGuests(firstname, lastname, email)
		VALUES ('John', 'Doe', 'john@ex.com')";
$queryStatus = $conn->query($sql);
if($queryStatus === true){
	echo "john doe added successfully";
} else {
	echo "error inserting row: ".$conn->error;
}

$conn->close();
?>
