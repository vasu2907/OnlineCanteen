<?php
session_start();
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

	<title><?php echo $_SESSION['Username']; ?></title>
	<link rel="Icon"  href="Images\Logo.png">

	<style>
		.header
		{
			margin-top: 2%;
			margin-left: 3%;
			font-size: 2.5vw;
		}
		#canteenimgs
		{	margin-left: 4.8%;
			float: left;
			height: 50%;
			width: 26.8%;
			background: #f2f2f2;
			float: center;
			padding: 3.8%;
			padding-top: 3%;
			border-radius: 5px;
		}
		#logo
		{	
			height: 12%;
			width: 7%;
		}
		#Text
		{
			font-family: cursive;
			margin-left: 7.5%;
			margin-top: -5.5%;
		}
		#logout
		{	
			display: inline-block;
			border-radius: 5px;	
			box-sizing: border-box;
			border: none;
			color: white;
			font-size: 1.5vw;
			height: 4%;
			width: 8%;
			cursor: pointer;
			padding-bottom: 5px;
			float: right;
			margin-top: -5%;
			margin-right: 3%;
		}
		#vl
		{
			border-left: 2px solid;
		  	height: 9%;
		  	position: absolute;
		  	left: 86%;
		  	margin-left: 1px;
		  	margin-top: -5.4%;
		}
		#hello
		{	margin-left: 76%;
			position: absolute;
			margin-top: -5%;
			font-size: 2vw;
			font-family: Georgia;
			color: #341f97;	
		}
		
	</style>

</head>
<body>


									<!--Header-->


	<div class="header">
		<img src="Images\Logo.png" id="logo">
		<p id="Text">NIT's Canteen</p>
		<p id="hello">Profile</p>
		<div id="vl"></div>
		<form id="logout" action="Profile.php" method="post">
			<input type="submit" name="signout" value="Log Out" style="border-radius: 4px;color: white;background-color: #10ac84;padding:3px 18px;margin-left: -5px;border: none;">
		</form>
		<?php

			if(isset($_POST['signout']))
			{
				session_destroy();
				header('location:Home.php');
			}
		?>
	</div>
	<hr style="width: 98%;margin-top: 2%;">

<div style="margin-top: 3%;">
	<ul>
		<li><a href="Home.php">Home</a></li>
		<li><a href="About.html">About</a></li>
		<li><a href="FAQ.php">FAQ</a></li>
		<li style="float: right;margin-right: 10px;"><a href="SignUp.php">Sign Up</a></li>
	</ul>
</div>

								<!--Resturants Tab-->


	<div id="canteenimgs">
		<a href="Moxie.php"><img src="Images\Moxie.png" height="250px"></a>
	</div>
	<div id="canteenimgs">
		<a href="Senate.php"><img src="Images\Senate.png" height="250px"></a>
	</div>
	<div id="canteenimgs">
		<a href="FunBytes.php"><img src="Images\FunBytes.png" height="250px;">
		</a>
	</div>
</body>
</html>