<?php
session_start();


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

<a href="#"><button class="btn btn-warning"><?php echo "WELCOME &nbsp;".$_SESSION['username'];?></button></a>
&nbsp;
<a href="#"style="color:white"><button class="btn btn-warning">MY ORDERS</button></a>

<a href="#"><img  src="img/clean.png" height="100px" style="padding:10px 10px 10px;" class="pull-right"></a>
</div>
</div>
</div>

<div class="container-fluid" style="height:400px;background-color:#5C6BC0
;">
<h1 style="font-family:'Lato';font-weight:100"><center><color style="color:black">STEP 1:</color>TELL US ABOUT YOUR HOME</center></h1>
<form  action="step2.php" method="POST">
<center>
<h1 style="font-family:'Lato';font-weight:100"> TO BE CLEANED LIST</h1>
<div class="form-group">

<label style="font-family:'Lato';font-weight:400">NO OF BED ROOMS&nbsp;&nbsp;:</label><input type="number" name="bedrooms" size="10" value="1" style="text-align:center;padding:1px;color:black">
</div>

<div class="form-group">
<label style="font-family:'Lato';font-weight:400">NO OF BATH ROOMS&nbsp;:</label><input type="number" name="bathrooms" size="10" value="1" style="text-align:center;color:black">
</div>
<div class="form-group">
<label style="font-family:'Lato';font-weight:400">LAUNDRY ( WASH+ DRY) &nbsp;:<input  type="radio" name="laundry" value="yes">YES&nbsp; <input name="laundry" type="radio" value="no" checked>NO</label>
</div>
<button type="submit" class="btn btn-success">NEXT</button>
</center>
</form>	
</div>

</body>