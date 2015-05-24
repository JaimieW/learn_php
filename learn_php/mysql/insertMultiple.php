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
		VALUES ('John', 'Doe', 'john@ex.com');";
$sql .= "INSERT INTO MyGuests(firstname, lastname, email)
		VALUES ('Jaimie', 'Whiteside', 'jaimie@gmail.com');";
$sql .= "INSERT INTO MyGuests(firstname, lastname, email)
		VALUES ('Jude', 'Whiteside', 'jaude@gmail.com');";
$sql .= "INSERT INTO MyGuests(firstname, lastname, email)
		VALUES ('Leah', 'Whiteside', 'leah@gmail.com');";

$queryStatus = $conn->multi_query($sql);
if($queryStatus === true){
	echo "New records added";
} else {
	echo "error inserting row: ".$conn->error;
}

$conn->close();
?>