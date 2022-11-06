<?php


$conn =mysqli_connect("localhost","root","","carsaledb");
$sql = "SELECT memberid,firstname,lastname,nicnumber,hometown,email FROM register";
$result = $conn->query($sql);
if($result->num_rows >0){
	while($row=$result->fetch_assoc()){
		echo "<div>";
		echo "Id :". $row['memberid']."</br>";
		echo "Name :" .$row['firstname'] ." ";
		echo $row['lastname'] ."</br> ";
		echo "NIC Number :" .$row['nicnumber'] ."</br>";
		echo "Home Town :" . $row['hometown'] . "</br>";
		echo "Email :".$row['email'] ."</br></br>";
		echo "</div>";
	}
} else{
	echo "echo";
}

$conn->close();

?>