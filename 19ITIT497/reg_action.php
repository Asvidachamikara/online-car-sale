<?php
$server="localhost";
$username="root";
$password="";
$database="carsaledb";

$conn = new mysqli($server,$username,$password,$database);
if ($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}

$sql = "INSERT INTO register (firstname,lastname,nicnumber,hometown,email,password) VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[nicnumber]','$_POST[hometown]','$_POST[email]','$_POST[password]')";

if ($conn->query($sql)=== TRUE) {
	echo "Registration Successfully<br>";
	echo "<a href=homepage.php>Click here go to the Home Page</a>";
} else {
	echo "Error";
}

$conn->close();


?>
