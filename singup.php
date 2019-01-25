<?php
		$con = mysqli_connect("localhost","root","") or die("Unabele to connect");
		mysqli_select_db($con,"loginpage");
		?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<link rel="stylesheet" href="Style.css">
	<link rel="stylesheet" href="login.css">
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
	<div class="bi_login" style="position: relative; width: 100%; height: 100%; padding: 8% 2% 20% 55%">
		<form style="margin-right: 0%; width: 85%; height: 100%" align="middle" action="singup.php" method="post" >
			<!--h2 style="text-align: center;">Log In to Pizza CRANNY</h2-->

			<input id="input1" type="text" name="username" placeholder="User Name" required>
			<input id="input1" type="text" name="mobile" placeholder="Mobile No." required>
			<input id="input1" type="text" name="email" placeholder="E-mail" required>
			<input id="input1" type="password" name="password" placeholder="Password" required>
			<input id="input1" type="password" name="cpassword" placeholder="Confirm Password" required>
			<input id="input1" type="text" name="address" placeholder="Address" required>
			<br>
			<br>
			<br>
			<input id="Login_btn" type="submit" name="submit_btn" style="margin-bottom: 10%" value="SignUp">
			<p style="font-weight:; font-size: 20px">__________________Or____________________</p>
			<a href="Login.php"><input id="signup_btn" type="button" name="back_btn" value="Back to Login"></a>
			<script>
function fn() {
    document.getElementById("input1").style.backgroundcolor = "transparent";
    document.getElementById("input1").style.fontSize = "25px";
    document.getElementById("input1").style.color = "white";
    document.getElementById("input1").size= "50";
}
</script>

		</form>
	</div>
	<?php
	/*if($_POST["password"] != $_POST["cpassword"])
		echo "<script> alert('Check Password')</script>";*/
		if(isset($_POST["submit_btn"]))
		{
			//echo '<script type="text/javascript"> alert("Submit Button Clicked") </script>';
			$username = $_POST["username"];
			$mobile = $_POST["mobile"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$cpassword = $_POST["cpassword"];
			$address = $_POST["address"];		


			if($password ==$cpassword)
			{
				$query= "select * from login WHERE username='$username'";
				$query_run = mysqli_query($con,$query);

				if(mysqli_num_rows($query_run)>0)
				{
					echo '<script type="text/javascript"> alert("User name already taken... Try something new") </script>';
				}
				else
				{
				$query= "insert into login values('$username','$mobile','$email','$password','$address')";
				$query_run= mysqli_query($con,$query);
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("Registration Successful") </script>';
					header('location:Login.php');
				}
				else
				{
					echo '<script type="text/javascript"> alert("Error!!!") </script>';

				}
			}

			}
			else
			{
				echo '<script type="text/javascript"> alert("Passwords do not match") </script>';
			}
		}

	?>

</body>
</html>