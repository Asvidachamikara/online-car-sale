<html>
<head>

<link rel="stylesheet" href="carlist.css">
<title>Search Car</title>
</head>
<body>

<body>
<?php

$server="localhost";
$username="root";
$password="";
$database="carsaledb";

$conn = new mysqli($server,$username,$password,$database);
if ($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}

$sql = "SELECT * FROM sellcars WHERE brand='$_POST[brand]' && model='$_POST[model]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
?>
<div id="carlist">
		<img src="<?php echo $row["image"];?>" width="500px" height="300px" border="5px"  >
<?php		
		echo  $row['brand'] ." ";
		echo  $row['model'] ."</br> ";
		echo "Price : RS " .$row['price'] ."</br>";
		echo "Condition :" . $row['description'] . "</br></br>";
	
	}
	echo "<a href=homepage.php>Back to the Home Page</a>";
} else {
	echo"NO results </br> ";
	echo "<a href=homepage.php>Back to the Home Page</a>";
}
$conn->close();		

?>
</div>
</body>
</html>