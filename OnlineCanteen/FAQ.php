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

	<title>FAQ</title>
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
		#back
		{
			width: 70%;
			background: #f2f2f2;
			margin: 2% 15%;
			padding: 1%;
			border-radius: 5px;

		}
		
	</style>
</head>
<body>


						<!--Logo Image and Heading -->


<div>
	<img src="Images\Logo.png" style="height: 11%;width: 11%;margin-top: 2%;
		margin-left: 18%;"
	 align="middle">
	 <p style="font-family: Comic Sans MS;font-size: 7vw; margin-left: 32%;margin-top: -11%;">NIT'S Canteen </p>
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

	<?php
		require 'config.php';
		$query="select * from FAQ";
		$query_run=mysql_query($query);
		while ($row=mysql_fetch_assoc($query_run))
		{	
			if($row['Answer']!="")
			{
				echo "<div id='back'><h5><i>".$row['Question']."</i></h5>".$row['Answer']."<br>By: ".$row['Username']." On ".$row['Date']."</div>";
			}
		}
	?>



	<?php
		require 'config.php';

		if(isset($_POST['askque']))
		{	
			
			if($_SESSION['Username']!="")
			{
				echo "<div>
	<form action='FAQ.php' method='post'>
		<label>Question</label>
		<input type='text' name='que' placeholder='Question'>
		<input type='submit' name='askque' value='Submit'>
	</form></div>";
				$que=$_POST['que'];
				$date=date("Y-m-d");
				echo "$date";

				$query="Insert into FAQ(Question,Username,Date) values('$que','$username','$date')";
				$query_run=mysql_query($query);
			}
			else
			{	
				echo "<html><script>alert('User not Logged In!')</script></html>";
			}
		}
	?>
</body>
</html>