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
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</head>  
<body>
<div class="container-fluid" style="background-color:#607D8B;color:white">
<a href="index.php" style="color:white;"><h1 style="font-family:'Lato';font-weight:100;paddding:1px 1px 1px">Dashboard</h1></div></a>
<!--<p class="pull-right" style="color:black"></p> -->

<div class="container-fluid" style="background-color:#607D8B;color:black;padding:1px 10px 10px 10px;">&nbsp;&nbsp;
	<a href="appointments.php" style="background-color:black;color:white;border-radius:5px;padding:5px 5px 5px 5px;">  APPOINTMENTS  </a>&nbsp;&nbsp;
	<a href="appointmentstobefinished.php" style="background-color:black;color:white;border-radius:5px;padding:5px 5px 5px 5px;">  APPOINTMENTS TO BE FINISHED  </a>&nbsp;&nbsp;
	<a href="finished.php" style="background-color:black;color:white;border-radius:5px;padding:5px 5px 5px 5px;">   APPOINTMENTS  FINISHED   </a>&nbsp;&nbsp;
		<a href="#" style="background-color:black;color:white;border-radius:5px;padding:5px 5px 5px 5px;">   USER PROFILES  </a>

	
</div>

</div>

<br>
<br>
<br>











<?php 
include 'config.php';


$id=$_GET['id'];
$sql="select * from customer_orders where ORDER_ID=$id";
$result=$conn->query($sql);

echo "<h1>";
echo "EDIT_ORDER_".$id;
echo "</h1>";

while($row=$result->fetch_assoc())
{   echo "<center>";
	echo "<form method=\"GET\" action=\"modify.php\" style=\"width:800px;\">";
	echo "<label>BATHROOMS</label>";
	echo "<input type=\"text\" name=\"BATHROOMS\" class=\"form-control\" value=".$row['ORDER_ID'].">";
	echo "<br>";
	
	echo "<label>BEDROOMS</label>";
	echo "<input type=\"text\" name=\"BEDROOMS\" class=\"form-control\" value=".$row['BEDROOMS'].">";
	echo "<br>";


    echo "<label>LAUNDRY</label>";
	echo "<input type=\"text\" name=\"BEDROOMS\" class=\"form-control\" value=".$row['LAUNDRY'].">";
	echo "<br>";



	echo "<label>DATE_OF_APPOINTMENT</label>";
	echo "<input type=\"date\"  class=\"form-control\" value=".$row['DATE'].">";
	echo "<br>";


	
    echo "<label>TIME</label>";
	echo "<input type=\"time\" name=\"BEDROOMS\" class=\"form-control\" value=".$row['TIME'].">";
	echo "<br>";

    echo "<label>EXTRA</label>";
	echo "<textarea class=\"form-control\" name=\"EXTRA\" >".$row['EXTRA']."</textarea>";
	echo "<br>";
    
    echo "<label>STATUS</label>";
	echo "<input type=\"text\" class=\"form-control\" name=\"STATUS\" value=".$row['status'].">";
	echo "<br>";


	echo "<input class=\"btn btn-success\" type=\"submit\" value=\"UPDATE\">";
	echo "</form>";
	echo "</center>";
}




 ?>
 </body>