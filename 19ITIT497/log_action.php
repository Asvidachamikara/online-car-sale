<?php
 session_start();
?>

<?php
 $_SESSION["email : "] = '$_POST[email]';
 $_SESSION["password : "] = '$_POST[password]';

?>

<?php
$server="localhost";
$username="root";
$password="";
$database="carsaledb";

$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
	die("Connection failed:" . $conn->connect_error);
}

$email = $_POST["email"];
$password = $_POST["password"];

$sql="SELECT * FROM register WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
	echo "Login Successfully<br>";
	echo "<a href=sell_car.php>Post  Ad</a>";
} else {
	echo "Login Invalid";
}



?>
