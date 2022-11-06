<html>
<head>

<link rel="stylesheet" href="Home_page.css">
<title>AutoVisionCar.lk</title>
</head>
 
<body>
<div id="header">
   <div class="logo">
     <h1>AutoVisionCar.lk</h1>
   </div>
	<div class="register">
	  <ul>
	     <li><a href="registration.php">Register</a></li>
		 <li></li>
	     <li><a href="login.php">Login</a></li>
	  </ul>
	</div>
</div>
<?php
  if(isset($_COOKIE['brand'])){
	  $brand=$_COOKIE['brand'];
  } else {
	  setcookie('brand','$_POST[brand]',time()+60*60*24*31);
  }
?>

<?php
  if(isset($_COOKIE['model'])){
	  $model=$_COOKIE['model'];
  } else {
	  setcookie('model','$_POST[model]',time()+60*60*24*31);
  }
?>
<div id="content">
<form action="search_car.php" method="post">

  <input class="brand" type="text" id="brand" name="brand" placeholder="Brand">
  
  <input class="model" type="text" id="model" name="model" placeholder="Model"><br>
  
  <input class="search" type="submit" value="Search">
  
</form>

</div>

<div id="copyright">
  Copyrigth &copy;2021
</div>
  
<div id="design">
  Design by R.D.A.C.Madusanka
</div>
<?php include 'car_list.php' ;?>


</body>

</html>