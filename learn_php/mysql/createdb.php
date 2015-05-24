<?php
$servername = "localhost";
$username = "root";
$password = "";

// create connection
$conn = new mysqli($servername, $username, $password);
if($conn->connect_error){
	die("connection failed: " . mysqli_connect_error());
}

// create db
$sql = "CREATE DATABASE myDB";
if($conn->query($sql) === true){
	echo "db create ok";
} else {
	echo "error creating db: " . $conn->error;
}

$conn->close();
?>