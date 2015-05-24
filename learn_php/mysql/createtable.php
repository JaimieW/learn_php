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

// sql needed to create db
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

$queryStatus = $conn->query($sql);
if($queryStatus === true){
	echo "created table MyGuests successfully";
} else {
	echo "error creating table: ".$conn->error;
}

$conn->close();
?>