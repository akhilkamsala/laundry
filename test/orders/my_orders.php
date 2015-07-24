


<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	a
	{
		color:aqua;
	}
	a:visited
	{
		color:aqua;
	}

</style>
 <link rel="icon"
      type="image/.jpg"
      href="img/clean.jpg">
	<title>
    www.wash.me

	</title>


	<!-- BOOTSTRAP CDN -->
<meta >

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</head>  
<body style="color:black">   

<div class="container-fluid">

<?php
include 'config.php';
$sql="SELECT * FROM CUSTOMER_ORDERS ORDER BY TIMESTAMP DESC";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())

	{
		echo"<table class=\"table-hover\">";
		echo 
		echo "<tr>";
		echo "<td>";
		echo $row["ORDER_ID"];
		echo "</td>";

		echo "<td>";
		echo $row["BATHROOMS"];
		echo "</td>";

		echo "<td>";
		echo $row["BEDROOMS"];
		echo "</td>";

		echo "<td>";
		echo $row["DATE"];
		echo "</td>";

		echo "<td>";
		echo $row["EXTRA"];
		echo "</td>";

		echo "<td>";
		echo $row["LAUNDRY"];
		echo "</td>";
		echo "<td>";
		echo $row["NAME"];
		echo "</td>";
		echo "<td>";
		echo $row["TIME"];
		echo "</td>";echo "<td>";
		echo $row["TIMESTAMP"];
		echo "</td>";
		echo "<td>";
		echo $row["USERNAME"];
		echo "</td>";

		echo "</tr>";	
		echo"</table>";
	}	

$conn->close();
?>
</div>
?>