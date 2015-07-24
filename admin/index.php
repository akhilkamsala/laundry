<?php
session_start();
$_SESSION['username']="admin";


include 'config.php';


 ?>


<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	a:hover
	{
		background-color: white;
		color: black;
	}
</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container-fluid" style="background-color:#607D8B;color:white">
<a href="index.php" style="color:white;"><h1 style="font-family:'Lato';font-weight:100;paddding:1px 1px 1px">Dashboard</h1></div></a>
<!--<p class="pull-right" style="color:black"></p> -->

<div class="container-fluid" style="background-color:white;color:black;padding:1px 1px 1px 1px;">&nbsp;&nbsp;
	<a href="appointments.php" style="background-color:black;color:white;border-radius:5px;padding:5px 5px 5px 5px;">  APPOINTMENTS  </a>&nbsp;&nbsp;
	<a href="appointmentstobefinished.php" style="background-color:black;color:white;border-radius:5px;padding:5px 5px 5px 5px;">  APPOINTMENTS TO BE FINISHED  </a>&nbsp;&nbsp;
	<a href="finished.php" style="background-color:black;color:white;border-radius:5px;padding:5px 5px 5px 5px;">   APPOINTMENTS  FINISHED   </a>&nbsp;&nbsp;
	
</div>

</div>

<br>
<br>
<div class="container-fluid" style="font-family:'Lato';font-weight:100;font-size:20px;border:2px dashed #607D8B">
	<p>
	<br>
			<center>
		<kbd>THIS ADMIN PAGE GIVE YOU ACCESS TO THE DATABASES SO PLEASE BE CAREFULL </kbd>
		</center>
	</p>
</div>


</body>
</html>