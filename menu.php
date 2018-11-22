<?php
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"loginpage");
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--link rel="stylesheet" href="W3Template.css"-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="menu.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Chicle|Indie+Flower|Pacifico|Shadows+Into+Light" rel="stylesheet">
</head>
<body>
	<div class="top">
		<div class="bar">
			<div class="row" class="nav">
				<div  class="col-2"></div>
				<div  class="col-1"><a id="nv" href="#homepage">HOME</a></div>
				<div  class="col-1"><a id="nv" href="#about">ABOUT US</a></div>
				<div  class="col-1"><a id="nv" href="#contact">CONTACTS</a></div>
				<div  class="col-1"><a id="nv" href="menu.html">MENU</a></div>
				<div class="col-3"></div>
				<div class="col-2" id="nv" style="background-color:; border-radius: 7%; padding:0% 1%; margin: 0% 2%; text-align: center; font-size: x-large;"><a href="Login.php">LogIn/SignUP</a></div>
			</div>
		</div>
	</div>

		
		
	<br><br>    
    <!--div class="bi_menu" style="position: relative; width: 100%; height: 100%; padding: 15% 2% 20% 55%">	
	</div-->

	<div class="menuu">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-3">
				<form class="item" action="menu.php" method="post">
					<img id="p_img" src="pizza1.png" style="width: 100%; height: 40%">
					<input  id="order_btn" type="submit" value="Order Now" name="btn1">
			</form></div>
			<div class="col-3">
				<form class="item" action="menu.php" method="post">
					<img id="p_img" src="pizza2.png" style="width: 100%; height: 40%">
					<input  id="order_btn" type="submit" value="Order Now" name="btn2">
			</form></div>
			<div class="col-3">
				<form class="item" action="menu.php" method="post">
					<img id="p_img" src="pizza3.png" style="width: 100%; height: 40%">
					<input  id="order_btn" type="submit" value="Order Now" name="btn3">
			</form></div>			
		</div>
		<div class="row">
			<div class="col-1"></div>
			<div class="col-3">
				<form class="item" action="menu.php" method="post">
					<img id="p_img" src="pizza4.png" style="width: 100%; height: 40%">
					<input  id="order_btn" type="submit" value="Order Now" name="btn4">
			</form></div>
			<div class="col-3">
				<form class="item" action="menu.php" method="post">
					<img id="p_img" src="pizza5.png" style="width: 100%; height: 40%">
					<input  id="order_btn" type="submit" value="Order Now" name="btn5">
			</form></div>
			<div class="col-3">
				<form class="item" action="menu.php" method="post">
					<img id="p_img" src="pizza6.png" style="width: 100%; height: 40%">
					<input  id="order_btn" type="submit" value="Order Now" name="btn6">
			</form></div>

			
		</div>
		
	</div>

	
	<?php
	
	if(isset($_POST["btn1"]))
	{
		$_SESSION['cost']= "220";
		$_SESSION['name']= "American";
		header('location:Placeorder.php');	
		
	}
	if(isset($_POST["btn2"]))
	{
		$_SESSION['cost']= "200";
		$_SESSION['name']= "Berkeley Vegan";
		header('location:Placeorder.php');	
		
	}
	if(isset($_POST["btn3"]))
	{
		$_SESSION['cost']= "180";
		$_SESSION['name']= "Californi Veggie";
		header('location:Placeorder.php');	
		
	}
	if(isset($_POST["btn4"]))
	{
		$_SESSION['cost']= "300";
		$_SESSION['name']= "Cheese";
		header('location:Placeorder.php');	
		
	}
	if(isset($_POST["btn5"]))
	{
		$_SESSION['cost']= "250";
		$_SESSION['name']= "Greek";
		header('location:Placeorder.php');	
		
	}
	if(isset($_POST["btn6"]))
	{
		$_SESSION['cost']= "210";
		$_SESSION['name']= "Ham And Pineapple";
		header('location:Placeorder.php');	
		
	}

	?>








	<footer style="margin-top: 30px" class="footer" id="contact">
	<div class="row">
		<div class="col-4" style="padding-top: 70px; padding-bottom: 70px">
			Monday-Thrusday 10.00AM-10.00PM
			Friday 9.00AM-10.00PM
			Saturday-Sunday 6.00PM-11.00PM
			<br>
			<br>
			For Orders Call:
			<br>1800-180-192<br><br>
			For Feedbacks and Complaints<br>Call: 1800-180-180
			<br>
			<br>
			
		</div>
		<div class="col-2"></div>
		<div id="map" style="width:100%; height:500px;" class="col-5"><img src="map.jpg"></div>
</div>

<p style="text-align: center; font-size: x-large;">Copyright@Pizza CRANNY</p>
<!--script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(31.6862,76.00), zoom: 10
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script-->


</footer>
  

</body>
</html>