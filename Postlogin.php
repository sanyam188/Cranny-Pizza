<?php
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
<link rel="stylesheet" href="Style.css">
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
				<div  class="col-1"><a id="nv" href="menu.php">MENU</a></div>
				<div class="col-4" style="text-align: right; font-size: x-large;"><b>Hi, <?php echo $_SESSION['username'] ?></b></div>
				<!--div class="col-2" style="background-color: #ff8000; border-radius: 7%; padding:0% 1%; margin: 0% 2%; text-align: center;"><a href="Login.php">Log Out</a></div-->
				<form action="Postlogin.php" method="post" style="background-color:; border: none; width: 10%; margin-right: 1%; padding: 0 3%" align="right" >
			<input style="text-align: center; border-radius:; background-color:transparent; border: none;color: white; font-size: x-large; color: blue;" type="submit" name="logout" value="Log Out">
			</form>
				<?php
			if(isset($_POST["logout"]))
			{
				session_destroy();				
				header('location:index.php');
			}
		?>
			</div>
		</div>
	</div>

		
		
	

	<div class="bi1" style=" position: relative;" id="homepage">
  
    <!--span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><span class="w3-hide-small"></span><b>Pizza Cranny</b></span-->
    <img src="pc.png" style="width: 65%; opacity:1.0">
  
</div>


<div style="max-width: 950px; margin: 10%; position: relative;" class="aboutus" id="about">
	<h2 class="center" style="width: 100%; text-align: center;"><span>About Our CRANNY Pizzas</span></h2>
	<br>
	<div style="margin:0% 20%; width: 70%">
	<img src="img2.jpg" style="margin: 30px 10px; width: 100%">
	<p class="abt">At Pizza Cranny, we don’t just make pizza. We make people happy. Pizza Cranny was built on the belief that pizza night should be special, and we carry that belief into everything we do. With more than 54 years of experience under our belts, we understand how to best serve our customers through tried and true service principles: We create food we’re proud to serve and deliver it fast, with a smile.</p>    
</div>
</div>

<div class="bi2" style=" position: relative; margin: auto;" id="offer">
      
</div>

<div style="position: relative;margin: 10% 10% ;">
	<div class="row" style="width: 100%">
		<div class="col-5">
			<h1 class="heading" style="text-align: center;">Delivery</h1>
			<p style="padding: 10%; font-size:20px">
				We at Pizza Cranny are commited to the convience of our customers, and currently we provide whizzy fast delivery in 20 cities across the country. We have a dedicated team of delivery boys in all stores who makes sure that you get your favorite Cranny Pizza well within time.
			</p>
		</div>
		<div class="col-6 " align="right">
			<img src="delivery1.png" id="img_delivery">			
		</div>
		
	</div>
</div>

<footer class="footer" id="contact">
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

<p style="text-align: center; font-size: x-large;">Copywrites@Pizza CRANNY</p>
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