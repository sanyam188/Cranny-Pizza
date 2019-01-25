<?php
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"loginpage");
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
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
	<div class="bi_login" style="position: relative; width: 100%; height: 100%; padding: 15% 2% 20% 55%">
		<form style="margin-right: 0%; width: 85%; height: 100%" align="middle" action="login.php" method="post">
			<!--h2 style="text-align: center;">Log In to Pizza CRANNY</h2-->

			<input id="input" type="text" name="username" placeholder="User Name" onclick="fn()" required>
			<br><br>
			<input id="input" type="password" name="password" placeholder="Password" required>
			<br>
			<br>
			<br>
			<input id="Login_btn" type="submit" name="Login_btn" style="margin-bottom: 10%" value="Login">
			<p style="font-weight:; font-size: 20px">__________________Or____________________</p>
			<a href="singup.php"><input id="signup_btn" type="button" name="signup_btn" value="New User? Register"></a>
			<script>
function fn() {
    document.getElementById("input").style.backgroundcolor = "transparent";
    document.getElementById("input").style.fontSize = "25px";
    document.getElementById("input").style.color = "white";
    document.getElementById("input").size= "50";
}
</script>
		</form>
	</div>

	<?php
	
	if(isset($_POST["Login_btn"]))
	{
		$username = $_POST["username"];
		$password = $_POST["password"];
		$query= "select * from login WHERE username='$username' AND password='$password'";
		$query_run= mysqli_query($con,$query);

		if(mysqli_num_rows($query_run)>0)
		{
			$_SESSION['username']= $username;
			echo "Success";
			header('location:Postlogin.php');
		}
		else
		{
			echo '<script type="text/javascript"> alert("Wrong Password or User Name") </script>';	
		}
	}
	?>


</body>
</html>