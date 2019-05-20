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

	<title>Bill</title>
	<link rel="Icon"  href="Images\Logo.png">
</head>
<body>
	<?php
		require 'config.php';
		$f=$_SERVER['HTTP_REFERER'];
		$tab="";
		if(strpos($f, 'Moxie'))
			$tab="Moxie";
		elseif (strpos($f, 'Senate'))
			$tab="Senate";		
		elseif (strpos($f, 'FunBytes')) 
			$tab="FunBytes";
		$query="select * from $tab";
		$query_run=mysql_query($query);
		$count=mysql_num_rows($query_run);
		$i=0;
		while($i<$count)
		{	
			$ar[$i]=$_POST[$i];
			$i++;
		}
		$i=0;
		$amount=0;
		while ($row=mysql_fetch_assoc($query_run))
		{	if($ar["$row[ID]"-1])
			{
				$amount+=$ar["$row[ID]"-1]*$row['Price'];
			}
		}
		echo "Amount= ".$amount; 
		
	?>

</body>
</html>