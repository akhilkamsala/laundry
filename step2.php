<?php
session_start();
$_SESSION['BATHROOMS']=$_POST['bathrooms'];
$_SESSION['BEDROOMS']=$_POST['bedrooms'];
$_SESSION['LAUNDRY']=$_POST['laundry'];


?>



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


<meta name="viewport" content="width=device-width, initial-scale=1.0">	
</head>  
<body style="color:white">    
</div>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12" style="background-color:white;height:100px;">

<h1 style="color:black;font-family:'Lato';font-weight:100;color:black;font-size:40px;color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROFFESIONAL STYLE CLEANING</h1>
<a href="#"><img  src="img/clean.png" height="100px" style="padding:10px 10px 10px;" class="pull-right"></a>
</div>
</div>
</div>	
<div class="container-fluid" style="height:400px;background-color:#5C6BC0;">
<h1 style="color:white;font-family:'Lato';font-weight:100;font-size:30px">ANY OTHER WORKS TELL US WE SIMPLE CHARGE YOU FOR THE EXTRA TIME</h1>

<form action="final.php" method="POST">
<textarea class="form-control"  rows= "10" cols="10" name="extra">
	
</textarea>
<br>
<h1 style="color:white;font-family:'Lato';font-weight:100;font-size:30px">TELL US WHEN SHOULD WE REACH YOU</h1>
<label>DATE</label><input class="" type="date" name="date" style="color:black">
<label>Time</label><input class="" type="time" name="time" style="color:black">

<button class="btn btn-success" type="submit">
BOOK MY APPOINTMENT</button>
	
</form>

</div>

</body>