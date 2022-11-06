<?php
$server="localhost";
$username="root";
$password="";
$database="carsaledb";

$conn = new mysqli($server,$username,$password,$database);
if ($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}

$sql = "INSERT INTO sellcars  (brand,model,price,description,image) VALUES('$_POST[brand]','$_POST[model]','$_POST[price]','$_POST[description]','$_POST[image]')";

if ($conn->query($sql)=== TRUE) {
	echo "Add Successfully<br>";
	echo "<a href=sell_car.php>Add More>>></a><br>";
	echo "<a href=homepage.php>Click here go to the Home Page </a>";
} else {
	echo "Error";
}

$conn->close();


?>
