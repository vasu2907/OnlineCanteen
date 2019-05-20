<?php
session_start();
require 'config.php';
echo $_SESSION['Username'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/		bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  		</script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/
  		popper.min.js">
  		</script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
  		</script>

	<title>Canteen</title>
	<link rel="Icon"  href="Images\Logo.png">

	<style >
		ul
		{	list-style-type: none;
  			margin: 0;
  			padding: 0;
  			overflow: hidden;
  			background-color: #333;
		}
		li
		{	float: left;
			margin-left: 0.5%;	
			font-size: 24px;
		}
		li a
		{	display: block;
  			color: white;
  			text-align: center;
  			padding: 12px 16px;
  			text-decoration: none;
		}
		li a:hover
		{	background-color: #111111;
			color: white;
			text-decoration: none;
		}
		input[type=text],select
		{	width: 100%;
			padding: 8px;
			font-size: 16px;
			padding-left: 10px;
			border:1px solid #ccc;
			border-radius: 4px;
			display: inline-block;
			box-sizing: border-box;
		}
		input[type=Password],select
		{	width: 100%;
			padding: 8px;
			font-size: 16px;
			padding-left: 10px;
			border:1px solid #ccc;
			border-radius: 4px;
			display: inline-block;
			box-sizing: border-box;
		}
		input[type=submit]
		{	width: 100%;
			margin-top: 20px;
			padding: 3px;
			display: inline-block;
			background-color:  #4CAF50;
			border-radius: 4px;
			box-sizing: border-box;
			font-size: 20px;
			border: none;
			font-family: Comic Sans MS;
			cursor: pointer;
			color: white;
		}
		input[type=submit]:hover
		{	background-color: #45a049;
		}
		#Food
		{
			margin-left: 41%;
			height: 53%;
			width: 57%;
			margin-top: -35%;
		}
	</style>
</head>
<body>


						<!--Logo Image and Heading -->


<div>
	<img src="Images\Logo.png" style="height: 11%;width: 11%;margin-top: 2%;margin-left: 18%;"
	 align="middle">
	 <p style="font-family: Comic Sans MS;font-size: 7vw; margin-left: 32%;margin-top: -11%;">NIT'S Canteen</p>
</div>

							
								<!--Navigation Bar-->


<div style="margin-top: 3%;">
	<ul>
		<li><a href="Home.php">Home</a></li>
		<li><a href="About.html">About</a></li>
		<li><a href="FAQ.php">FAQ</a></li>
		<li style="float: right;margin-right: 10px;"><a href="SignUp.php">Sign Up</a></li>
	</ul>
</div>


								<!--Login Form-->


<div style="float: left; border-radius: 5px;background-color: #f2f2f2;padding: 2.4%;margin: 4%; height: 340px;width: 33%;" >
	<p align="middle" style="font-family: cursive;font-size: 24px;">LOGIN</p>
	<form action="Home.php" method="post" style="font-size: 20px;">
		<label for="Username">Username</label>
		<br>
		<input type="text" name="username" placeholder="Username" required="">
		<br>
		<label for="Password">Password</label>
		<br>
		<input type="Password" name="password" placeholder="Password" required="">
		<br>
		<input type="submit" name="login" value="Log In">
	</form>


						<!--Login Form PHP Code Starts-->


	<?php
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];

			$query="select * from login_info where Username='$username' AND Password='$password'";
			$query_run=mysql_query($query);

			if(mysql_num_rows($query_run)>0)
			{
				//Valid User
				$_SESSION['Username']=$username;
				header('location: Profile.php');
			}
			else
			{
				//Invalid User
				echo "<script type='text/javascript'> alert('Wrong Credentials')
					</script>";
			}
		}
	?>


							<!--Login Page PHP Code Ends-->


	

</div>
<img id="Food" src="Images\Food.png">
</body>
</html>