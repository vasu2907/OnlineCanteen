<? php
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

	<title>Senate</title>
	<link rel="Icon"  href="Images\Logo.png">

	<style>
		.header
		{
			margin-top: 2%;
			margin-left: 3%;
			font-size: 2.5vw;
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
		.back
		{
			margin-left: 5%;
			border-radius: 5px;
			opacity: 0.9;
			width: 60%;
			padding-top: 3%;
			margin-top: 5%;
			background: #f2f2f2;
			padding-left:3% ;
		}
		#Order_btn
		{
			width: 24%;
			margin-left: 38%;
			margin-bottom:  3%;
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
		input[type=text],select
		{
			width: 75%;
			border-radius: 4px;
			border: 1px solid #ccc;
		}
	</style>
</head>
<body>
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




									<!--Menu List-->


	<div class="back">
		<form action="Bill.php" method="Post">
			<table width="100%">
			<tr>
				<th width="15%">Item No</th>
				<th width="40%">Item</th>
				<th width="15%">Price</th>
				<th >Quantity</th>
			</tr>
			<?php
				require 'config.php';
				$query="select * from Senate";
				$query_run=mysql_query($query);
				$count=0;
				while ($row=mysql_fetch_assoc($query_run)) 
				{	
					echo "<tr>
						<td>".$row['ID']."</td>
						<td >".$row['Item']."</td>
						<td >".$row['Price']."</td>
						<td><input type='text' name='$count' placeholder='           Quantity'></td>  
						</tr>";
						$count++;
				}
			?>
		</table>
		<input type="submit" name="Order_btn" value="Order" id="Order_btn">
		</form>		
	</div>

</body>
</html>