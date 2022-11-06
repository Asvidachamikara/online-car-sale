<html>
<head>

<link rel="stylesheet" href="carlist.css">
<title>Car List</title>
</head>
<body>


<?php


$conn =mysqli_connect("localhost","root","","carsaledb");
$sql = "SELECT brand,model,price,description,image FROM sellcars";
$result = $conn->query($sql);
if($result->num_rows >0){
	while($row=$result->fetch_assoc()){
?>

<div class="carlist">
   <img src="<?php echo $row["image"];?>" width="600px" height="400px" class="img-responsive" border="5px">
 
 <?php  
	    echo  $row['brand'] ." ";
		echo  $row['model'] ."</br> ";
		echo "Price : RS " .$row['price'] ."</br>";
		echo "Condition :" . $row['description'] . "</br></br>";
		
	}
} else{
	echo "echo";
}

$conn->close();


?>
</div>

</body>
</html>