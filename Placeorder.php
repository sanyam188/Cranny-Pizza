<?php
		$con = mysqli_connect("localhost","root","") or die("Unabele to connect");
		mysqli_select_db($con,"order");
		session_start();
		?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>

	<link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="Style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
	<link href="https://fonts.googleapis.com/css?family=Chicle|Indie+Flower|Pacifico|Shadows+Into+Light" rel="stylesheet">
	
</head>

<body>
	
	<div class="top">
		<div class="bar">
			<div class="row" class="nav">
				<div  class="col-2"></div>
				<div  class="col-1"><a id="nv" href="index.php#homepage">HOME</a></div>
				<div  class="col-1"><a id="nv" href="index.php#about">ABOUT US</a></div>
				<div  class="col-1"><a id="nv" href="index.php#contact">CONTACTS</a></div>
				<div  class="col-1"><a id="nv" href="menu.php">MENU</a></div>
				<div class="col-6"></div>
							
		</div>
	</div></div>

		<div class="row">
			<div class="col-2"></div>
			<div class="col-6">
			<img src="cranny.png" style="height:; width: 80%; margin-top: 50px">
			<div style="border: solid; border-color: black; width: 80%; padding:7% 10%">
			<h4 style="text-align: left;"><b>Item : <?php echo $_SESSION['name']; ?></b><b style="text-align: right;">  <p>   </p>   Total : <?php echo $_SESSION['cost']; ?></b></h4>
			<h4 style="text-align: right;"></h4>
			<form action="Placeorder.php" method="post">
				<label>Name</label>
			<input id="input1" type="text" name="name" placeholder="Name" required>
			<label>Mobile No</label>
			<input id="input1" type="text" name="mobile" placeholder="Mobile No." required>
			<label>Delivery Address</label>
			<input id="input1" type="text" name="address" placeholder="Address" required>

			</div>
		<input type="submit" name="order" value="Confirm Order" style="color: black; background-color: #ff6600; width: 20%; margin: 50px; height: 50px; font-weight: bolder; font-size: large; border-radius: 20px;">
		</div>
			
		</form>

		<div class="col-4">
			<img src="order.jpg" style="width: 90%">
		</div>

		</div>


		<?php
			if(isset($_POST["order"]))
			{
				$name = $_POST['name'];
				$mobile = $_POST['mobile'];
				$address = $_POST['address'];
				$cost =  $_SESSION['cost'];
				$pname = $_SESSION['name'];

				$query  = "insert into ordert values('$name','$mobile','$address','$cost','$pname')";				
				$query_run= mysqli_query($con,$query);

				if($query_run)
				{
					echo '<script type="text/javascript"> alert("Order Succesfully Placed") </script>';	
			
				}
				else
				{
					echo '<script type="text/javascript"> alert("Error!!!") </script>';
					header('location:index.php');
					session_destroy();
				}
			}

		?>
		
</body>
</html>