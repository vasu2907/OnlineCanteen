<?php
require 'config.php';
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
	<title>Sign Up</title>
	<link rel="Icon"  href="Images\Logo.png">

	<style >
		input[type=text],select
		{	width: 93%;
			padding: 1.7%;
			font-size: 16px;
			padding-left: 10px;
			margin-top: -2%;
			border:1px solid #ccc;
			border-radius: 4px;
			display: inline-block;
			box-sizing: border-box;
		}
		input[type=Password],select
		{	width: 93%;
			padding: 1.7%;
			font-size: 16px;
			padding-left: 10px;
			margin-top: -10px;
			border:1px solid #ccc;
			border-radius: 4px;
			display: inline-block;
			box-sizing: border-box;
		}
		input[type=submit]
		{	width: 93%;
			margin-top: 20px;
			padding: 0.7%;
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
	</style>

</head>
<body background="Images\SignUp_background.jpg">


								<!--Register Form-->


	<div style="width: 36%;height: 110%; margin-left: 32%;margin-top: 3%;margin-bottom: 3%; background-color: #f2f2f2;
		float: left;border-radius: 6px;	opacity: 0.8;padding-left: 2.5%;">
		<form action="SignUp.php" method="Post" style="font-size: 20px;">
			<legend style="font-family: cursive;font-size: 32px;"><center>Register</center></legend>
			<label for="Name">Name</label><br>
			<input type="text" name="name" placeholder="Name" required="">

			<label for="Username">Username</label><br>
			<input type="text" name="username" placeholder="Roll Number" required="">
			
			<label for="Email">Email-ID</label><br>
			<input type="text" name="email" placeholder="Email-ID" required="">
			
			<label for="Hostel">Hostel</label><br>
			<input type="text" name="hostel" placeholder="Hostel Number" required="">
			
			<label for="Password">Password</label><br>
			<input type="Password" name="password" placeholder="Password" required=""><br>
			
			<label for="Confirm_Password">Confirm Password</label><br>
			<input type="Password" name="confirm_password" placeholder="Re-Enter Password" required="">

			<input type="submit" name="submit_btn" value="Sign Up">
		</form>

		<?php

			if (isset($_POST['submit_btn'])) 
			{	
				//echo '<script type=""text/javascript"> alert("Sign Up button Clicked")</script>';
				$name=$_POST['name'];
				$username=$_POST['username'];
				$email=$_POST['email'];
				$hostel=$_POST['hostel'];
				$password=$_POST['password'];
				$confirm_password=$_POST['confirm_password'];

				if($password==$confirm_password)
				{
					$query="select * from login_info where Username='$username'";
					$query_run=mysql_query($query);

					if(mysql_num_rows($query_run)>0)
					{
						//There's a User with same Username
						echo '<script type=""text/javascript"> alert("User already exists.Try another Username!")</script>';
					}
					else
					{
						$query="insert into login_info values('$username','$name','$email','$hostel','$password')";
						$query_run=mysql_query($query);

						if($query_run)
						{
							echo '<script type=""text/javascript"> alert("User Registered!")</script>';
						}
						else
						{
						echo '<script type=""text/javascript"> alert("Failed to Register!")</script>';
						}
					}
				}
				else
				{
					echo '<script type=""text/javascript"> alert("Passwords does not match!")</script>';
				}

			}
		?>
		<p style="margin-left: 20%;">Already have an account? <a href="Home.php">Log In</a>  </p>
	</div>


</body>
</html>