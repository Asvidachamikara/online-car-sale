<?php
$server="localhost";
$username="root";
$password="";
$database="carsaledb";

$conn=new mysqli ($server,$username,$password,$database);

if($conn->connect_error){
	die("connection failed:". $conn->connect_error);
}
//echo "Connected Succesfully";

//Create database
/*$sql = "CREATE DATABASE carsaledb";
if ($conn->query($sql) === TRUE){
	echo "Database created successfully";
} else{
	echo "Error creating database:" . $conn->error ;
}*/

//sql to create table
$sql = "CREATE TABLE sellcars (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
brand VARCHAR(30) NOT NULL,
model VARCHAR(30) NOT NULL,
price VARCHAR(15),
description VARCHAR(30),
image VARCHAR(255),
add_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
	echo "Table created successfully";
} else {
	echo "Error creating table:" . $conn->error;
}
?>