<?php
 session_start();
?>
<html>
<body>
<head>

<link rel="stylesheet" href="sell_car.css">
<title>Add Details</title>
</head>
<div id="form">
  <div class="text">
<form action="sell_car_action.php" method="post" enctype="multipart/from-data">
<label>Car Brand</label><br>
<input type="text" name="brand"><br/><br/>
<label>Car Model</label><br>
<input type="text" name="model"><br/><br/>
<label>Price</label><br>
<input type="text" name="price"><br/></br>
<label>Description</label><br>
<input type="text" name="description"><br/><br/>
<label>Choose a Photo</label><br><br>
<input type="file" name="image" id="image"><br><br>

<button type="submit" name="submit">Submit</button>
  </div>
</div>
  

</form>
</body>
</html>